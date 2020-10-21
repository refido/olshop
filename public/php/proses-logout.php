<?php
session_start();
session_destroy();
header("location:http://localhost/online_shop?logout=berhasil");

