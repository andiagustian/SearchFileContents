<?php
$path = $_POST['inputPath'];
$phrase = $_POST['inputPhrase'];
$submit = $_POST['submit'];
$row = array();
if($submit){
    if($path!='' && $phrase!=''){
        $sc = new ScanFile();
        $row = $sc->search($path,$phrase);
        echo "<h2>Result</h2>";
        echo "<p>";
        echo "Path      : ".$path."<br/>";
        echo "Phrase    : ".$phrase." (".count($row).")<br/>";
        echo "</p>";
        if(count($row)>0){
            ?>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>File</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            for($i=0;$i<count($row);$i++){
                                echo "<tr>";
                                echo "<td>".($i+1)."</td>";
                                echo "<td>".$row[$i]."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php    
        }

    }else{
        echo "Please enter Path & Phrase ";
       
        
    }

}else{
    echo "Please enter Path & Phrase ";
   
}

