<?php
$conn = mysqli_connect("localhost", "root", "", "tour");
if (!$conn) {
    echo "<script>alert('Try Again, Server Down.');</script>";
    exit();
}

$query = "INSERT INTO booking (name, email, phone, address, tour_package, guests, arrivals, leaving)
          VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phone]', '$_POST[address]', '$_POST[tour_package]', '$_POST[guests]', '$_POST[arrivals]', '$_POST[leaving]')";

$res = mysqli_query($conn, $query);

if ($res) {
    echo "<script>
        alert('Thanks for Booking! Generating Receipt...');
        generateReceipt();
        setTimeout(function() {
            window.location.href = 'home.php';
        }, 3000); // Wait before redirecting
    </script>";
} else {
    echo "<script>alert('Server Down. Try Again.');</script>";
}
?>

