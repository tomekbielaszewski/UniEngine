<script>
var JSLang = {'Tip_LockedVoted': '{Tip_LockedVoted}', 'Tip_Locked': '{Tip_Locked}', 'Tip_Voted': '{Tip_Voted}', 'Tip_Obligatory': '{Tip_Obligatory}'};
</script>
<script src="dist/js/polls_list_body.cachebuster-1545956361123.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/polls_list_body-1.3.0.1.min.css" />
<br/>
<table width="650">
    <tr>
        <td class="c">{Title}</td>
    </tr>
    <tr>
        <th class="pad5">{Poll_system_info}</th>
    </tr>
    <tr>
        <td class="c center">{Select_poll}</td>
    </tr>
    <tbody id="list">
        {Insert_PollRows}
    </tbody>
</table>
