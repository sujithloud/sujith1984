<?php
$curl = curl_init();
$channel =$_GET['c'];

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://spapi.zee5.com/singlePlayback/getDetails/secure?channel_id=$channel&device_id=pCJRxF4ugKTVlOrgwjd0000000000000&platform_name=desktop_web&translation=en&user_language=en,hi,pa&country=IN&state=CH&app_version=2.50.71&user_type=premium&check_parental_control=false&utm_source=GoogleSearch&uid=819ad83f-0755-4b49-bf82-dbce9cd1c938&ppid=pCJRxF4ugKTVlOrgwjd0000000000000&version=12",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"x-access-token":"eyJ0eXAiOiJqd3QiLCJhbGciOiJIUzI1NiJ9.eyJwcm9kdWN0X2NvZGUiOiJ6ZWU1QDk3NSIsInBsYXRmb3JtX2NvZGUiOiJXZWJAJCF0Mzg3MTIiLCJpc3N1ZWRBdCI6IjIwMjEtMTItMTNUMDY6MzA6MDIrMDAwMCIsInR0bCI6ODY0MDB9.kqfBoTmQcRleiPJMZqTZ0YsmWD9TF9368zEUBMYrJsk","Authorization":"bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYmYiOjE2MzkzNzk0MDYsImV4cCI6MTY3MDkxNTQwNiwiaXNzIjoiaHR0cHM6Ly91c2VyYXBpLnplZTUuY29tIiwiYXVkIjpbImh0dHBzOi8vdXNlcmFwaS56ZWU1LmNvbS9yZXNvdXJjZXMiLCJzdWJzY3JpcHRpb25hcGkiLCJ1c2VyYXBpIl0sImNsaWVudF9pZCI6InJlZnJlc2hfdG9rZW5fY2xpZW50Iiwic3ViIjoiNzdmZGFjZjUtZWI4OC00ODVlLTk1OGYtM2JkMWU0ODJiZTZkIiwiYXV0aF90aW1lIjoxNjM5Mzc5NDA2LCJpZHAiOiJsb2NhbCIsInVzZXJfaWQiOiI3N2ZkYWNmNS1lYjg4LTQ4NWUtOTU4Zi0zYmQxZTQ4MmJlNmQiLCJzeXN0ZW0iOiJaNSIsImFjdGl2YXRpb25fZGF0ZSI6IjIwMTktMDctMTRUMDc6MTQ6MDkiLCJjcmVhdGVkX2RhdGUiOiIyMDE5LTA3LTE0VDA3OjEzOjM2IiwicmVnaXN0cmF0aW9uX2NvdW50cnkiOiJJTiIsInVzZXJfbW9iaWxlIjoiOTE5NjczNTk0MTQzIiwic3Vic2NyaXB0aW9ucyI6Ilt7XCJpZFwiOlwiMjZlMjkwZjktMGIwMC00ODZhLTkwNWItNTQ2MjJmNTFjYzgzXCIsXCJ1c2VyX2lkXCI6XCI3N2ZkYWNmNS1lYjg4LTQ4NWUtOTU4Zi0zYmQxZTQ4MmJlNmRcIixcImlkZW50aWZpZXJcIjpcIkNSTVwiLFwic3Vic2NyaXB0aW9uX3BsYW5cIjp7XCJpZFwiOlwiMC0xMS0xODM0XCIsXCJhc3NldF90eXBlXCI6MTEsXCJzdWJzY3JpcHRpb25fcGxhbl90eXBlXCI6XCJTVk9EXCIsXCJ0aXRsZVwiOlwiUHJlbWl1bVwiLFwib3JpZ2luYWxfdGl0bGVcIjpcIlByZW1pdW1cIixcInN5c3RlbVwiOlwiWjVcIixcImRlc2NyaXB0aW9uXCI6XCJQcmVtaXVtIFBhY2sgLSA2IG10aHNcIixcImJpbGxpbmdfY3ljbGVfdHlwZVwiOlwiZGF5c1wiLFwiYmlsbGluZ19mcmVxdWVuY3lcIjoxODAsXCJwcmljZVwiOjU5OS4wLFwiY3VycmVuY3lcIjpcIklOUlwiLFwiY291bnRyeVwiOlwiSU5cIixcImNvdW50cmllc1wiOltcIklOXCJdLFwic3RhcnRcIjpcIjIwMjEtMDItMDFUMDA6MDA6MDBaXCIsXCJlbmRcIjpcIjIwMjItMTItMzFUMjM6NTk6NTlaXCIsXCJvbmx5X2F2YWlsYWJsZV93aXRoX3Byb21vdGlvblwiOmZhbHNlLFwicmVjdXJyaW5nXCI6ZmFsc2UsXCJwYXltZW50X3Byb3ZpZGVyc1wiOlt7XCJuYW1lXCI6XCJaRUU1XCJ9XSxcInByb21vdGlvbnNcIjpbXSxcImFzc2V0X3R5cGVzXCI6WzYsMCw5XSxcImFzc2V0X2lkc1wiOltdLFwiYnVzaW5lc3NfdHlwZVwiOlwiZnJlZVwiLFwiYmlsbGluZ190eXBlXCI6XCJwcmVtaXVtXCIsXCJudW1iZXJfb2Zfc3VwcG9ydGVkX2RldmljZXNcIjo1LFwibW92aWVfYXVkaW9fbGFuZ3VhZ2VzXCI6W10sXCJ0dl9zaG93X2F1ZGlvX2xhbmd1YWdlc1wiOltdLFwiY2hhbm5lbF9hdWRpb19sYW5ndWFnZXNcIjpbXSxcInZhbGlkX2Zvcl9hbGxfY291bnRyaWVzXCI6dHJ1ZSxcImFsbG93ZWRfcGxheWJhY2tfZHVyYXRpb25cIjo2LFwiY2F0ZWdvcnlcIjpudWxsfSxcInN1YnNjcmlwdGlvbl9zdGFydFwiOlwiMjAyMS0wNy0zMVQxMzowMDo0MC45OTNaXCIsXCJzdWJzY3JpcHRpb25fZW5kXCI6XCIyMDIyLTAxLTI3VDIzOjU5OjU5WlwiLFwic3RhdGVcIjpcImFjdGl2YXRlZFwiLFwicmVjdXJyaW5nX2VuYWJsZWRcIjpmYWxzZSxcInBheW1lbnRfcHJvdmlkZXJcIjpcImNybVwiLFwiZnJlZV90cmlhbFwiOm51bGwsXCJjcmVhdGVfZGF0ZVwiOlwiMjAyMS0wNy0zMVQxMzowMDo0MC45OTNaXCIsXCJpcF9hZGRyZXNzXCI6XCI0Ny4yOS42OC41MlwiLFwicmVnaW9uXCI6XCJCaWhhclwiLFwiYWRkaXRpb25hbFwiOntcInBheW1lbnRtb2RlXCI6XCJQcmVwYWlkQ29kZVwiLFwiY291cG9uY29kZVwiOlwiWjU2TVRFcnZOcTc3SDhcIn0sXCJhbGxvd2VkX2JpbGxpbmdfY3ljbGVzXCI6MCxcInVzZWRfYmlsbGluZ19jeWNsZXNcIjowfV0iLCJjdXJyZW50X2NvdW50cnkiOiJaWiIsInNjb3BlIjpbInN1YnNjcmlwdGlvbmFwaSIsInVzZXJhcGkiLCJvZmZsaW5lX2FjY2VzcyJdLCJhbXIiOlsiZGVsZWdhdGlvbiJdfQ.quKm4m5ZvF52CZCP9KkszAcF9nBKtrca3ZtTuK-0GedaKTG6ltMCWyVlaq3Sn69gmz8e_bTVoL9VaCtylucmJzasEAvMMswb7Nte8MiH9Aq7HP1imrV0r8rNan4eh9a0XC42RqSgx3Wws-RfOwMLzV-xkALNnex5R-0JpimvLiAHnYAUJMmCvjmYuN1eUO-t3fm0HscBRIHOJAByZPbDUTkYbg_82V7fkgZv61RHvE_8zcTwGzgesWPDjoQvKhEYEKhW5Jr_pp9J-RImSyIckr_Iy0E7rMV_48-UXxr42TdGomkAAClPWsi_Q8uyNAmCwdc2tOQAPfwcpCDJkHmagg"}',
  CURLOPT_HTTPHEADER => array(
    'authority: spapi.zee5.com',
    'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Microsoft Edge";v="92"',
    'dnt: 1',
    'sec-ch-ua-mobile: ?0',
    'user-agent: ExoPlayer',
    'content-type: application/json',
    'accept: */*',
    'origin: https://www.zee5.com',
    'sec-fetch-site: same-site',
    'sec-fetch-mode: cors',
    'sec-fetch-dest: empty',
    'referer: https://www.zee5.com/',
    'accept-language: en-US,en;q=0.9'
  ),
));
$response = curl_exec($curl);

curl_close($curl);

$temp = json_decode($response,true);
$playit = $temp["keyOsDetails"]["video_token"];
	header("Location: $playit");


?>