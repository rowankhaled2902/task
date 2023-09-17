<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 750px;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 18px;
        }

        /* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

            table {
                width: 100%;
            }

            /* Force table to not be like tables anymore */
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                /* Label the data */
                content: attr(data-column);

                color: #000;
                font-weight: bold;
            }

        }
    </style>
</head>

<body>
    <table>
        <thead>
        <?php
    $names = array(
        array("fname"=>"Ahmed","lname"=>"Fahmy", "Job Title"=>"Actor" ,"Twitter"=>"@Fahmy"),
        array("fname"=>"Rowan","lname"=>"Lotfy", "Job Title"=>"Engineer" ,"Twitter"=>"@row_khaled"),
        array("fname"=>"Mohammed","lname"=>"Elboraiy", "Job Title"=>"Film Director" ,"Twitter"=>"@boraiy_film1"),
        array("fname"=>"Ahmed","lname"=>"Zwail", "Job Title"=>"Scintest" ,"Twitter"=>"@zwail"),
        array("fname"=>"Ali","lname"=>"fathy", "Job Title"=>"Doctor" ,"Twitter"=>"@doc_fathy"),
        
    )
    ?>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Job Title</th>
                <th>Twitter</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($names as $name){
                ?>

            <tr>
                <td> <?php echo $name ['fname']; ?> </td>
                <td> <?php echo $name ['lname']; ?> </td>
                <td> <?php echo $name ['Job Title']; ?> </td>
                <td> <?php echo $name ['Twitter']; ?> </td>
            </tr>
            
            <?php
            }
            ?>

        </tbody>
    </table>
</body>

</html>