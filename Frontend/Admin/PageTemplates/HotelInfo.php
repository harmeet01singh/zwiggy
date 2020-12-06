<?php 

$title="HotelInfo";
include("../sidebar.php");

$hotels = $data->query('SELECT * FROM hotel');

// print_r($users);

?>
            <table id="table">
                <thead>
                    <tr>
                        <th>Hotel Id</th>
                        <th>Hotel Name</th>
                        <th>Hotel City</th>
                        <th>Contact</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($hotels as $hotel) { ?>
                        <tr class="rows">
                            <td><?php echo $hotel['hotel_id'] ?></td>
                            <td><?php echo $hotel['hotel_name'] ?></td>
                            <td><?php echo $hotel['hotel_city'] ?></td>
                            <td><?php echo $hotel['hotel_contact'] ?></td>
                            <td><button>Remove</button></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td id="pages"></td>
                    </tr>
                </tfoot>
            </table>
            
            <script src='pagination.js'></script>
        </div>
    </div>
</body>
</html>