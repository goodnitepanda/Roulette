<?php
class helperfunctions {

    public function CallAPI($url)
    {
      try {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_URL, $url);

        $result = curl_exec($curl);

        if (FALSE === $result)
        {
          throw new Exception(curl_error($curl), curl_errno($curl));
        }
        curl_close($curl);
      }
       catch (Exception $e)
       {
        trigger_error(sprintf(
        'Curl failed with error #%d: %s',
        $e->getCode(), $e->getMessage()),
        E_USER_ERROR);
      }
        return $result;
    }
}
 ?>
