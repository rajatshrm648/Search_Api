<?php
if(isset($_POST['str']))
{
$ch = curl_init();
$str=$_POST['str'];
curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$postdata=array("model"=> "text-davinci-001",
  "prompt"=> $str,
  "temperature"=> 0.4,
  "max_tokens"=> 1400,
  "top_p"=> 1,
  "frequency_penalty"=> 0,
  "presence_penalty"=> 0); 
$postdata=json_encode($postdata);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization:Bearer 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 ';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
// $result=json_decode($result,true);
// echo $result['choices'] [0] ['text'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div>
  <h5 class="container-cen">Ask Anything</h5>
  <form method="post">
    <input class="text" type="text" name="str" required width=100%><br>
    <input class="submit" type="submit" name="submit" class="btn btn-primary" value="search">
  </form>
  </div>
<?php
 $result=json_decode($result,true);
echo $result['choices'][0]['text'];  
?> 
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
