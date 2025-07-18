<?php
// Online Voting System - Utility Functions
// Customized by Jyothsna, 2025
// Copyright © 2025 Jyothsna. All rights reserved.

function e($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function redirect($url) {
    header('Location: ' . $url);
    exit();
}
