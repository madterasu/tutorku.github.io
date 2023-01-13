<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$hasil = mysqli_query($conn, "select * from admin where username='$username' and password='$password'");
while ($data=mysqli_fetch_array($hasil))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Basic&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Basic&display=swap'); </style>
    <link rel="stylesheet" href="style.css">
    <title>Tutorku</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="kontak.html">Hubungi Kami</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li style="float:right">
            <?echo $data['username']?>
            </li>
        </ul>
    </div>
    <div class="header">
        <h1>TutorKu . . .</h1>
      </div>
      
      <div class="row">
        <div class="leftcolumn">
          <div class="card">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim consectetur tellus, quis pulvinar magna feugiat non. In laoreet, nunc vitae aliquam molestie, nulla ante aliquet arcu, eu convallis felis ligula sed dolor. Donec maximus nulla non mi auctor, quis facilisis arcu aliquam. Phasellus aliquam libero eget lacus mattis dapibus. Duis rutrum fringilla massa. Cras ut posuere ipsum, in porttitor massa. Proin rhoncus et libero ut gravida. Aliquam ultricies ante et enim mattis pretium. Pellentesque hendrerit metus eget quam fermentum, vel volutpat erat convallis. Donec pretium aliquet magna, in rutrum libero blandit at. Donec pulvinar nibh leo, nec consequat justo ullamcorper at. Nunc quis dui dictum, tincidunt nisi ac, suscipit dolor.

              Phasellus consectetur ac ante et interdum. Quisque consequat, enim non varius convallis, felis purus venenatis nibh, in maximus lectus sapien quis sem. Integer sit amet enim tincidunt, ultrices nisl id, mattis augue. Ut efficitur bibendum placerat. Duis in porttitor mi, at facilisis nisl. Vivamus pulvinar lacinia augue quis efficitur. Cras at ligula aliquet risus pulvinar dapibus sit amet non urna. Fusce at eleifend quam.
              
              Morbi tempor venenatis metus eu egestas. Aliquam elementum justo ac orci accumsan pellentesque. Etiam ut porttitor urna. Curabitur eleifend enim sed lectus volutpat, sed semper sem rhoncus. Nulla in volutpat arcu. Nullam accumsan velit non pretium dapibus. Sed porta neque neque, id vestibulum turpis auctor eu. Ut eu sem vitae dui laoreet aliquet a eu ex. Mauris pulvinar porta metus, nec semper mauris pretium quis. Aenean nec tortor non mauris tempus gravida. Quisque vel libero quis mi bibendum dapibus ac nec ligula. Cras nec nisi eget dolor ultrices varius a eget magna. Fusce sit amet ornare nisl, a aliquet nisl. Nullam pellentesque vitae mi sit amet blandit.
              
              Praesent in varius metus, vel tincidunt neque. Proin posuere vehicula ex. Maecenas ac massa est. Maecenas quis condimentum lacus. Suspendisse tincidunt at orci sit amet blandit. Mauris risus purus, ornare vel consectetur at, rutrum a nunc. Fusce convallis mattis diam eget molestie. Curabitur sem velit, congue vitae porta lobortis, tempus at lectus. Sed mi risus, blandit eu vehicula vel, fringilla nec mauris. Donec sit amet consequat dui. Aliquam pellentesque nunc quis purus lobortis bibendum.
              
              Maecenas dignissim elit sapien, ac imperdiet purus suscipit ac. Donec id imperdiet odio, sit amet eleifend augue. Maecenas nec sagittis erat, et sodales neque. Proin consequat elit sit amet tortor scelerisque, at semper neque auctor. Mauris nulla lacus, ultricies et risus nec, aliquet fermentum augue. Aliquam iaculis massa commodo ante congue sagittis. Suspendisse potenti. Proin in lorem quis turpis tempus congue ut id eros. Vivamus egestas ut nisi in ullamcorper. Pellentesque ac quam luctus, rutrum mi quis, dignissim magna. Donec cursus odio a sapien condimentum fermentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur facilisis imperdiet nibh, aliquam scelerisque arcu. Donec ullamcorper ipsum varius dui ultrices pharetra. In hac habitasse platea dictumst. Curabitur in massa pellentesque, ultrices enim vel, congue odio.
              
              Aliquam tristique turpis in venenatis vestibulum. Phasellus bibendum risus ac tortor faucibus dapibus. Nullam sem quam, hendrerit faucibus pretium et, viverra id nibh. Phasellus lacinia dolor vel mauris rhoncus, in ultrices tortor ullamcorper. Aenean in gravida diam. Phasellus dictum est vel velit viverra posuere. Nam a eros et ante efficitur suscipit quis a mi. Sed cursus leo id turpis faucibus, sed finibus odio luctus. Sed in feugiat quam. In et scelerisque justo. Integer eget suscipit augue, at placerat neque. Vestibulum maximus lacus ut lacus molestie, at imperdiet neque accumsan. Sed tincidunt tellus et libero porttitor eleifend. Etiam facilisis pulvinar bibendum.
              
              Ut at massa ullamcorper, auctor nunc non, suscipit orci. Integer gravida vitae urna id commodo. Aenean nec tempor est, eu tincidunt ipsum. Morbi eu posuere tellus. Etiam sed est metus. Integer ac eros vitae sem dapibus sollicitudin eu vitae felis. Quisque blandit lorem ac lorem condimentum efficitur. In erat nunc, molestie a condimentum nec, feugiat vel purus. Sed ac volutpat leo. Cras blandit quis lacus consequat maximus. Vivamus posuere fermentum sodales. Vivamus blandit tempor justo. Donec consequat arcu mauris, vitae pharetra dolor dapibus at. Nulla interdum massa nunc, vitae volutpat mi euismod sed. Phasellus nec tellus sollicitudin, aliquam dolor at, euismod purus.
              
              Sed vitae mauris in nisl ullamcorper consectetur. Morbi felis velit, condimentum nec libero ut, iaculis pellentesque tellus. Aenean accumsan libero id bibendum tincidunt. Suspendisse laoreet ullamcorper condimentum. Praesent eget nulla dapibus risus fringilla eleifend sit amet vitae justo. Phasellus vitae nulla augue. Sed at ante sed odio feugiat varius. Nunc sem mi, lobortis et velit in, sodales feugiat erat.
              
              Aenean sodales pellentesque sapien dictum mollis. Vivamus aliquet ex dolor, in tempor velit bibendum eget. Curabitur orci mauris, ullamcorper vel augue vitae, placerat sodales massa. Cras sodales, velit in gravida dignissim, eros nisl elementum tellus, sit amet vehicula lorem neque at nibh. Maecenas dictum sit amet lacus eu efficitur. Vivamus felis neque, condimentum quis quam nec, ornare imperdiet est. Aenean non ex diam.
              
              Integer sit amet nibh euismod, scelerisque nisi at, rhoncus nulla. Praesent blandit sapien vitae rhoncus imperdiet. Fusce eget diam aliquam, facilisis sem ac, suscipit ex. Nulla eu egestas quam, nec scelerisque nisl. Suspendisse cursus massa aliquam erat congue tempus. Donec mollis arcu id est interdum rhoncus. Nam suscipit interdum risus, ac porttitor enim mattis in. Integer a lectus a felis condimentum varius eget vitae nulla. Cras consectetur id libero in aliquam. Curabitur sapien ante, scelerisque eget nisl at, ultricies pellentesque orci. Aliquam erat volutpat. Integer nisi elit, dignissim at maximus ut, maximus a nulla. Phasellus elementum sem vitae elit tincidunt sagittis. Donec tristique pretium ex at feugiat. Vestibulum faucibus vulputate sodales.</p>
          </div>
        </div>
        <div class="rightcolumn">
          <div class="card">
            <h2>About Me</h2>
            <div class="fakeimg" style="height:100px;">Image</div>
            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
          </div>
          <div class="card">
            <h3>Popular Post</h3>
            <div class="fakeimg">Image</div><br>
            <div class="fakeimg">Image</div><br>
            <div class="fakeimg">Image</div>
          </div>
          <div class="card">
            <h3>Follow Me</h3>
            <p>Some text..</p>
          </div>
        </div>
      </div>
      
      <div class="footer">
        <h2>Footer</h2>
      </div>
</body>
</html>