<?php
    //export.php
    if(isset($_POST["btnExp"]))
    {
        $connect = mysqli_connect("localhost", "root", "", "lims");
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=videoborrowingsfortoday.csv');

        $output = fopen("php://output", "w");
        fputcsv($output, array('ID', 'Return Date', 'Video Id', 'User Id', 'Borrowed Date', 'Due Date'));

        $query = "SELECT * FROM `video_borrowings` WHERE borrowed_date >= CURDATE()
        AND borrowed_date < CURDATE() + INTERVAL 1 DAY";

        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_assoc($result))
            {
                fputcsv($output, $row);
            }
        fclose($output);
    }
?>