<?php
unset($_SESSION['username']);
unset($_SESSION['point']);
unset($_SESSION['admin']);
rdr("?page=login");