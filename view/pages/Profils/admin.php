<html>

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
 var new_nom=document.getElementById("new_nom").value;
 var new_prenom=document.getElementById("new_prenom").value;
 var new_email=document.getElementById("new_email").value;
 var new_role=document.getElementById("new_role").value;

 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='nom_row"+table_len+"'>"+new_nom+"</td><td id='prenom_row"+table_len+"'>"+new_prenom+"</td><td id='email_row"+table_len+"'>"+new_email+"</td><td id='role_row"+table_len+"'>"+new_role+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_nom").value="";
 document.getElementById("new_prenom").value="";
 document.getElementById("new_email").value="";
 document.getElementById("new_role").value="<select id='role_text"+no+"' value='"+role_data+"'><option>Coach</option><option>Coureur</option><option>Admin</option></select>";

}
</script>
</head>
<body>

<div id="wrapper" >
<table align='center' cellspacing=2 cellpadding=5 id="data_table" border=1 style="margin-top: 100px;">
<tr>
<th align=center><form><input type="text" placeholder="rechercher.."><input type="button" value="rechercher"></form></th>
</tr>
<tr>
<th>Nom</th>
<th>Prenom</th>
<th>Email</th>
<th>Role</th>
</tr>
<?php
foreach($userinfo as $user):
    ?>
    
<tr id="row1">
<td id="nom_row1"></td>
<td id="prenom_row1"><?php echo $user['id'] ;?></td>
<td id="email_row1">coureur</td>
<td id="role_row1">20</td>
<td>

<input type="button" id="edit_button1" value="Edit" class="edit" onclick="edit_row('1')">
<input type="button" id="save_button1" value="Save" class="save" onclick="save_row('1')">
<input type="button" value="Delete" class="delete" onclick="delete_row('1')">
</td>

</tr>
<?php
endforeach;
?>
<tr id="row2">
<td id="nom_row2">Shawn</td>
<td id="prenom_row2">Canada</td>
<td id="email_row2">26</td>
<td id="role_row2">26</td>
<td>
<input type="button" id="edit_button2" value="Edit" class="edit" onclick="edit_row('2')">
<input type="button" id="save_button2" value="Save" class="save" onclick="save_row('2')">
<input type="button" value="Delete" class="delete" onclick="delete_row('2')">
</td>
</tr>

<tr id="row3">
<td id="nom_row3">Rahul</td>
<td id="prenom_row3">India</td>
<td id="email_row3">19</td>
<td id="role_row3">19</td>
<td>
<input type="button" id="edit_button3" value="Edit" class="edit" onclick="edit_row('3')">
<input type="button" id="save_button3" value="Save" class="save" onclick="save_row('3')">
<input type="button" value="Delete" class="delete" onclick="delete_row('3')">
</td>
</tr>

<tr>
<td><input type="text" id="new_nom"></td>
<td><input type="text" id="new_prenom"></td>
<td><input type="text" id="new_email"></td>
<td><select id="new_role"><option>Coach</option><option>Coureur</option><option>Admin</option></select></td>
<td><input type="button" class="add" onclick="add_row();" value="Add Row"></td>
</tr>

</table>
</div>

</body>
</html>