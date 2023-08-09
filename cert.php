<?php
  session_start();
 ?>

<?php
try{
  $db=new PDO('mysql:host=localhost;dbname=website;charset=utf8','root','',array(PDO::ATTR_ERRMODE =>
PDO::ERRMODE_EXCEPTION)); } catch(Exception $err){ die('Connection Failed
:'.$err->getMessage()); } $req=$db->prepare('SELECT * FROM users WHERE
emailUsers=:e'); $req->execute(array('e'=>$_SESSION['userEmail']));
if($enreg=$req->fetch()){/*If we find the person with the login email*/
$id=$enreg['idUsers'];
 } ?>

<html>
      <head>
        <style type="text/css">
          body,
          html {
            margin: 0;
            padding: 0;
          }
          body {
            color: black;
            display: table;
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
          }
          .container {
            border: 20px solid tan;
            width: 750px;
            height: 563px;
            display: table-cell;
            vertical-align: middle;
          }
          .logo {
            color: tan;
          }

          .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
          }
          .assignment {
            margin: 20px;
          }
          .person {
            border-bottom: 2px solid black;
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 400px;
          }
          .reason {
            margin: 20px;
          }
        </style>
      </head>
      <body>
        <div class="container">
          <div class="logo"></div>

          <div class="marquee">Certificate of Completion</div>

          <div class="assignment">This certificate is presented to</div>

          <div class="person">
            <?php echo isset($_SESSION['userUid']) ? $_SESSION['userUid']: '';?>
          </div>

          <div class="reason">
            For completing 3 sections of the quiz that were given about dementia
            and we do hope<br />
            that by completing the quiz there is a much greater understanding on
            the illness call dementia.
          </div>
        </div>
      </body>
    </html>
  </div>
</div>