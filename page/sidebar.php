<div class="col-md-4">
    <script>
        $.post('https://mcapi.ca/query/sv1.orangepe.com:19132/mcpe', function(data){
            var tab = " / ";
            $("#survival").html(data.players.online + tab + data.players.max);

        }, 'json');
    </script>
<ul class="list-group">
    <li class="list-group-item"><span class="badge" id="survival"></span>Survival
    </li>
</ul>

</div>