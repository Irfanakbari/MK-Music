<div class="container">
    <br><br><br>
    <center>
        <h2 style="color: white;">Daftar Pahlawan</h2>
    </center>
    <br>
    <table class="table table-dark table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        // ajax buat load data pahlawan
        $.ajax({
            url: 'data2.php',
            method: 'post',
            type: 'json',
            success: function(data) {
                $("#loader-wrapper").fadeOut(1000);
                console.log(data);
                // insert data to table
                var html = '';
                var index = 1;
                $.each(data, function(key, value) {
                    html += '<tr>';
                    html += '<td>' + index + '</td>';
                    html += '<td>' + value.name + '</td>';
                    html += '<td>' + value.date + '</td>';
                    html += '<td>' + value.place + '</td>';
                    html += '</tr>';
                    index++;
                });
                $('tbody').html(html);
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
</script>