<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amiten";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Generar clave secreta para la autenticación
$secret_key = bin2hex(random_bytes(32));

function generateQRCode($code) {
    return "otpauth://totp/" . urlencode($code) . "?secret=" . urlencode($secret_key) . "&issuer=Amiten";
}

function verifyOTP($code, $timestamp) {
    $expected_code = hash_hmac('sha256', $timestamp, $secret_key, true);
    $expected_code = base64_encode($expected_code);
    $expected_code = substr($expected_code, -8); // Últimos 8 caracteres
    
    return hash_equals($code, $expected_code);
}

function authenticateTwoFactor($username, $password, $otp_code) {
    global $conn;

    // Verificar credenciales
    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // Obtener timestamp actual
            $timestamp = time();
            
            // Generar código QR
            $qr_code = generateQRCode($username . ":" . $timestamp);
            
            // Verificar OTP
            if (verifyOTP($otp_code, $timestamp)) {
                return array(true, "Autenticación exitosa", $qr_code);
            } else {
                return array(false, "Código OTP incorrecto", null);
            }
        } else {
            return array(false, "Usuario o contraseña incorrectos", null);
        }
    } else {
        return array(false, "Error al ejecutar la consulta", null);
    }

    $stmt->close();
}
