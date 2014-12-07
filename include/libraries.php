<?php
include 'config.php';
;
function lookup($table,$field)
{
    $sql = "select * from $table";
    /*Set Khmer unicode*/
    mysql_query("set character_set_results='utf8'" );
    /*send to server*/
    $query = mysql_query($sql);
    $i=1;
    while ($row=mysql_fetch_array($query)) {
       echo '<option>'.$row[$field].'</option>';
    }

}

function destroy($table,$field,$id)
{
    $sql = "delete from $table WHERE  $field=$id";
    @mysql_query($sql);

}

function create($table,$field,$value)
{
    $count = count($field) - 1;
    $sql = "insert into $table";
    for ($i=0;$i<$count;$i++) {
        $sql .= $field[$value];
    }

    $sql .= $field[$count]."values(";
    for ($i=0;$i<$count;$i++) {
        $sql .= "'$value[$i]'";
    }
    $sql .= "'$value[$count]'";
    @mysql_query($sql);
}

function update($table,$field,$value,$field_id,$id)
{
    $count = count($field) - 1;
    $sql = "UPDATE $table SET ";
    for ($i=0;$i<$count;$i++) {
        $sql .= $field[$i] . "='".$value[$i]."'";
    }
    $sql .= $field[$count] . "='" . $value . "'";
    $sql .= "where $field_id=$id";
    @mysql_query($sql);
}
