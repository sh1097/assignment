# assignment


1- CRM was built using Core PHP, CSS, Boostrap, and Mysql.
2-Intailly A landing page with some information regarding the portal
3-If a new user add it will address as a Guest 
4-Only if a user signs up can he upload images and view their records, so I included a Signu form.
5-After signing up, the page will redirect to the login page with proper validation.
6- Website  used for image upload is https://shital-gupta.imgbb.com/ 
7-Curl is the image uploading method used on the imgbb website.
 $apiKey = $CLIENT_ID; // Replace with your ImgBB API key

  $uploadUrl = 'https://api.imgbb.com/1/upload';
  $file = $_FILES['photos']['tmp_name'];

  $curl = curl_init();

  curl_setopt($curl, CURLOPT_URL, $uploadUrl);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, [
      'key' => $apiKey,
      'image' => new CURLFile($file),
  ]);

  $response = curl_exec($curl);
  curl_close($curl);
