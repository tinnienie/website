<?php
// Generate a unique invite code or token
$inviteCode = generateInviteCode();

// Create the invite link URL
$inviteLink = "https://forgetel/index.php?code=" . $inviteCode;

// Output the invite link
echo "Invite Link: <a href=\"$inviteLink\">$inviteLink</a>";

// Function to generate a random invite code
function generateInviteCode() {
    // Generate a random string of alphanumeric characters
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $codeLength = 10; // Adjust the length as needed
    $inviteCode = '';

    for ($i = 0; $i < $codeLength; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $inviteCode .= $characters[$randomIndex];
    }

    return $inviteCode;
}
?>