<?php
class helperfunctions {

    public function CallAPI($url)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_URL, urlencode($url));


        $result = curl_exec($curl);

        curl_close($curl);

        // switch ($method)
        // {
        //     case "GET":
        //         curl_setopt($curl, CURLOPT_POST, 1);

        //         if ($data)
        //             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        //         break;
        //     case "PUT":
        //         curl_setopt($curl, CURLOPT_PUT, 1);
        //         break;
        //     // default:
        //     //     if ($data)
        //     //         $url = sprintf("%s?%s", $url, http_build_query($data));
        // }

        // Optional Authentication:
        // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // curl_setopt($curl, CURLOPT_USERPWD, "username:password");

        // curl_setopt($curl, CURLOPT_URL, $url);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        return $result;
    }
}
 ?>