<html>
<head>
<title>Faktur Pembayaran</title>

<style>
    #tabel
    {
        font-size:15px;
        border-collapse:collapse;
    }
    #tabel  td
    {
        padding-left:5px;
        border: 1px solid black;
    }
    #p0 { text-indent: 2em; }
</style>



</head>
    
    <body style='font-size:12pt;'>
        <?php
            // $suplier     ='';
            // $type     ='';
            // $gender   ='';
            // $age      ='';
            // $price    ='';

            // if(isset($cat)){
            //     $name     =$cat->name_008;
            //     $type     =$cat->type_008;
            //     $gender   =$cat->gender_008;
            //     $age      =$cat->age_008;
            //     $price    =$cat->price_008;
            // }
        ?>

            <center>
                <table style='width:750px; font-size:12pt; font-family:Times New Roman; border-collapse: collapse;' border = '0'>
                    <td width='75%' align='left' style='padding-right:80px; vertical-align:top'>
                        <img src="uploads/img/logo.png" alt="" width="100" height="100">
                    </td>
                    <td style='vertical-align:top' width='30%' align='left'>
                        <b><br><span style='font-size:12pt'>PT Obor Indonesia</span></b></br><br>
                        <span style='font-size:8pt;'>PASKAL HYPER SQUARE BLK A</span></br>
                        <span style='font-size:8pt;'>NO. 48-49</span></br>
                        <span style='font-size:8pt;'>JL. PASIR KALIKI NO. 25-27 BANDUNG</span></br>
                    </td>
                </table>
                <b><span style='font-size:18pt'>INVOICE</span></b></br><br>
                <span>&nbsp;</span>
                <table style='width:750px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
                    <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                    Nama Supplier &emsp;&emsp; : <br>
                    Alamat &emsp;&emsp;&emsp;&emsp;&emsp; : <br>
                    Tanggal &emsp;&emsp;&emsp;&emsp;&ensp;&ensp;: </br>
                    </td>
                </table>
                <br><br>
                <table cellspacing='0' style='width:750px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>
                
                    <tr align='center'>
                        <td width='3%'>No</td>
                        <td width='20%'>Nama Barang</td>
                        <td width='13%'>Harga</td>
                        <td width='4%'>Qty</td>
                        <td width='7%'>Discount</td>
                        <td width='13%'>Total Harga</td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Rp. </td>
                        <td></td>
                        <td>Rp. </td>
                        <td style='text-align:left'>Rp. </td>
                    </tr>
                    <tr>
                        <td colspan = '6'><div style='text-align:right'>&nbsp;</div></td>
                    </tr>
                    <tr>
                        <td colspan = '6'><div style='text-align:right'>&nbsp;</div></td>
                    </tr>
                    <tr>
                        <td colspan = '5'><div style='text-align:right'>Total Yang Harus Di Bayar Adalah : </div></td>
                        <td style='text-align:left'>Rp. </td>
                    </tr>
                    <tr>
                        <td colspan = '6'><div style='text-align:right'>&nbsp;</div></td>
                    </tr>
                    <tr>
                        <td colspan = '6'><div style='text-align:right'>&nbsp;</div></td>
                    </tr>
                    <tr>
                        <td colspan = '5'><div style='text-align:right'>Cash : </div></td>
                        <td style='text-align:left'>Rp. </td>
                    </tr>
                    <tr>
                        <td colspan = '5'><div style='text-align:right'>Kembalian : </div></td>
                        <td style='text-align:left'>Rp. </td>
                    </tr>
                    <tr>
                        <td colspan = '5'><div style='text-align:right'>Sisa : </div></td>
                        <td style='text-align:left'>Rp. </td>
                    </tr>
                </table>
                <br><br>
                <table style='width:650; font-size:7pt;'>
                    <tr>
                        <td align='left'>Diterima Oleh,</br></br><br><br><u>(.....................)</u></td>
                        <td align='center' style='border:1px solid black; padding:5px; width:200px'>Pembayaran Melalui Transfer</td>
                        <td align='right' style='padding-right:10px '>TTD,&emsp;&ensp;&ensp;</br></br></br></br><u>(.....................)</u></td>
                    </tr>
                </table>
            </center>
        
    
    <script>
        window.print();    
    </script>
</body>
</html>