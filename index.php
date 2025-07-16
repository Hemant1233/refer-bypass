<?php
$response = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['refer'])) {

    function randomIndianMobile() {
        return '8' . rand(2, 9) . rand(10000000, 99999999);
    }

    function randomDeviceId() {
        return substr(md5(uniqid(mt_rand(), true)), 0, 16);
    }

    function randomName() {
        $firstNames = ['Ajay','Rahul','Vikas','Ramesh','Ankit','Suresh','Mohit','Aman','Ravi','Deepak','Sanjay','Abhishek','Karan','Yogesh','Sumit','Ashutosh','Mayank','Rohan','Siddharth','Harsh'];
        $lastNames = ['Sharma','Yadav','Verma','Mishra','Choudhary','Gupta','Patel','Meena','Dubey','Kumar','Thakur','Rawat','Joshi','Pandey','Tripathi','Rajput','Singh','Jain','Tiwari','Dwivedi'];
        return $firstNames[array_rand($firstNames)] . ' ' . $lastNames[array_rand($lastNames)];
    }

    function randomGmail($name) {
        return strtolower(str_replace(' ', '', $name)) . rand(10, 99) . "@gmail.com";
    }

    function randomGAID() {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

    function randomIPv6() {
        $segments = [];
        for ($i = 0; $i < 8; $i++) {
            $segments[] = dechex(mt_rand(0, 65535));
        }
        return implode(':', $segments);
    }

    function randomModel() {
        $models = ['Redmi Note 12', 'Realme Narzo 50', 'Samsung M14', 'Vivo T2x', 'Poco C55', 'Infinix Smart 7', 'Lava Blaze 5G', 'Moto G73', 'iQOO Z6 Lite', 'Nokia G21'];
        return $models[array_rand($models)];
    }

    function randomOEM($model) {
        if (stripos($model, 'Redmi') !== false || stripos($model, 'Poco') !== false) return 'Xiaomi';
        if (stripos($model, 'Realme') !== false) return 'Realme';
        if (stripos($model, 'Vivo') !== false || stripos($model, 'iQOO') !== false) return 'Vivo';
        if (stripos($model, 'Samsung') !== false) return 'Samsung';
        if (stripos($model, 'Infinix') !== false) return 'Infinix';
        if (stripos($model, 'Lava') !== false) return 'Lava';
        if (stripos($model, 'Moto') !== false) return 'Motorola';
        if (stripos($model, 'Nokia') !== false) return 'Nokia';
        return 'Android';
    }

    $refer = htmlspecialchars($_POST['refer']);
    $mobile = randomIndianMobile();
    $deviceId = randomDeviceId();
    $name = randomName();
    $email = randomGmail($name);
    $gaid = randomGAID();
    $ip = randomIPv6();
    $model = randomModel();
    $oem = randomOEM($model);

    $url = "http://3.109.115.226:3000/login";

    $data = [
        "ccode"    => "IN",
        "deviceId" => $deviceId,
        "model"    => $model,
        "email"    => $email,
        "gaid"     => $gaid,
        "imei"     => "",
        "ip"       => $ip,
        "lat"      => 0.0,
        "long"     => 0.0,
        "no"       => $mobile,
        "name"     => $name,
        "oem"      => $oem,
        "os"       => "P",
        "pkg"      => "com.apps.earneasy",
        "referral" => $refer,
        "token"    => "f7lbdLzORcOy34lXTh2nRP:APA91bGYTuj9rZYiu066XQhgRVWfzE-_xAHM4sNNez-W-URf9KNq1_IeurxKv9-Rc-xrRw50ON3bfKfVEKGs3pf9GUT0SJQSNPAWq6nudjPo3DV2MOF601I"
    ];

    $headers = [
        "Content-Type: application/json; charset=UTF-8",
        "User-Agent: okhttp/4.12.0",
        "bitch: " . $mobile
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // ✅ Use authenticated proxy
    curl_setopt($ch, CURLOPT_PROXY, '78.46.241.187');
    curl_setopt($ch, CURLOPT_PROXYPORT, 51592);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, '7tYgbb:dWtwvV');

    $apiResponse = curl_exec($ch);

    if (curl_errno($ch)) {
        $response = "❌ Error: " . curl_error($ch);
    } else {
        $response = "<br>📱 Mobile: $mobile<br>✅ Refer Successfully";
        echo "<meta http-equiv='refresh' content='0.1;url=https://t.me/+_-tokteer7llMWE1'>";
    }

    curl_close($ch);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>The Ajay (⁠◠⁠‿⁠◕⁠)</title>
  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0; padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom right, #0072ff, #0072ff);
    }
    .container {
      width: 92%;
      max-width: 360px;
      margin: 90px auto 30px;
      background: white;
      border-radius: 18px;
      box-shadow: 0 0 25px rgba(0,0,0,0.2);
      padding: 100px 20px 30px;
      position: relative;
    }
    .logo {
      width: 100px; height: 100px;
      border-radius: 50%;
      border: 3px solid white;
      background: white;
      overflow: hidden;
      position: absolute;
      top: 5px; left: 50%;
      transform: translateX(-50%);
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    .logo img {
      width: 100%; height: 100%;
      object-fit: cover;
    }
    .header {
      background: #5e2be9;
      color: white;
      text-align: center;
      font-size: 18px;
      font-weight: 600;
      padding: 13px 10px;
      border-radius: 12px;
      margin-top: 20px;
      margin-bottom: 10px;
    }
    .form input {
      width: 100%;
      padding: 12px 15px;
      margin: 10px 0;
      border-radius: 12px;
      border: 2px solid #ccc;
      font-size: 15px;
      outline: none;
      text-align: center; 
      transition: 0.3s;
    }
    .form input:focus { border-color: #5e2be9; }
    .submit-btn {
      width: 100%;
      background: #00c853;
      color: white;
      border: none;
      padding: 14px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 12px;
      margin-top: 10px;
      cursor: pointer;
    }
    .telegram-btn {
      display: block;
      width: 100%;
      background: #0088cc;
      color: white;
      text-align: center;
      padding: 14px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 12px;
      margin-top: 15px;
      text-decoration: none;
    }
    .error, .msg {
      display: block;
      width: 100%;
      padding: 14px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 12px;
      margin-top: 15px;
    }
    .error {
      background: #ffe5e5;
      border: 2px solid red;
      color: red;
    }
    .msg {
      background: #e0f7fa;
      border: 2px solid #2196f3;
      color: green;
    }
    .submit-btn:hover, .telegram-btn:hover { opacity: 0.93; }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="https://payez.site/As.jpg" alt="logo" />
    </div>
    <div class="header">Earn Easy Reffer Bypass</div>
    <div class="form">
      <?php if (!$response): ?>
        <form method="post">
          <input type="refer" name="refer" class="input" placeholder="Enter Refer Code" required><br>
          <button class="submit-btn">Login Now</button>
        </form>
      <?php endif; ?>

      <?php if ($response): ?>
        <div class="msg"><?= $response ?></div>
      <?php endif; ?>

      <a href="https://t.me/+_-tokteer7llMWE1" class="telegram-btn">Join Official Telegram</a>
    </div>
  </div>
</body>
</html>