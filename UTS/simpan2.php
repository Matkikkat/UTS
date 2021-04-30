<?php  
    if(isset($_POST['submit']))
    {
        $wilayah = $_POST['wilayah'];
        $positif = $_POST['positif'];
        $dirawat = $_POST['dirawat'];
        $sembuh = $_POST['sembuh'];
        $meninggal = $_POST['meninggal'];
        $operator = $_POST['operator'];
        $NIM = $_POST['NIM'];


        date_default_timezone_set('Asia/Jakarta');
        $sekarang = getdate();
        $bulan = $sekarang['month'];
        $hari = $sekarang['mday'];
        $tahun = $sekarang['year'];
        $jam = $sekarang['hours'];
        $menit = $sekarang['minutes'];
        

        $data = "       +--+--+--+--+--+--+-+--+--+--+--+--+--+--+--+--+--+--+--+--+
        | POSITIF | DIRAWAT | SEMBUH | MENINGGAL | OPERATOR | NIM |
        +--+--+--+--+--+--+-+--+--+--+--+--+--+--+--+--+--+--+--+--+
        |  $positif  |   $dirawat    |   $sembuh   |    $meninggal   | $operator | $NIM |
        +--+--+--+--+--+--+-+--+--+--+--+--+--+--+--+--+--+--+--+--+";//isinya variable diatas 
        
        $dbdate = "\t \t Data Pemantaun Covid19 Wilayah $wilayah \n \t \t \t per $hari $bulan $tahun $jam \n \t \t $operator / $NIM" ;
        $dbspace= "==================================================================================";

        $table = "<table border='1'>
        <tr>
            <td>
                POSITIF
            </td>
            <td>
                DIRAWAT
            </td>
            <td>
                SEMBUH
            </td>
            <td>
                MENINGGAL
            </td>
            <td>
                NAMA OPERATOR
            </td>
            <td>
                NIM
            </td>
        </tr>
        <tr>
            <td>$positif</td>
            <td>$dirawat</td>
            <td>$sembuh</td>
            <td>$meninggal</td>
            <td>$operator</td>
            <td>$NIM</td>
        </tr>
    </table>";
        
        //$file = fopen("data.txt","w+") or die ("file not open");//create file
        $file_saya = file_put_contents("data.txt",$dbdate.PHP_EOL.$dbspace.PHP_EOL.$data.PHP_EOL,FILE_APPEND);


        echo $dbdate."<BR>".$dbspace.$table;

         //assign
        fwrite($file,$positif); 
        $html_form = "<html><body><p>Data Pemantaun Covid19 Wilayah $wilayah per $sekarang $operator / $NIM</p>$table</body></html>";//bentuk html
        $file2 = fopen($html_file,"w+") or die ("file not open");//create file
        $file_saya2= file_put_contents ($html_file,$html_form);


    }  
 ?>  