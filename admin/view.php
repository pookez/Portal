<?php

require "koneksi.php";

$query = $pdo->prepare("SELECT * FROM materi");
$query->execute();
if($query->rowCount() > 0 ){
    
   $no=1;
   while ($r = $query->fetch()) {
        
       echo '<tr>
                
                <td>'.$r['materi'].'</td>
                <td>'.$r['bab'].'</td>
				<td><a href="detail.php?bab='.$r['bab'].'" title="lihat detail materi" >View</a> | <a href="hapus.php?bab='.$r['bab'].'" title="hapus materi" >Del</a></td>
             </tr>';
        
       ++$no;

    }//end while
    
}else{
    
    echo "<tr><td colspan=\"2\">Not Found</td></tr>";
}
