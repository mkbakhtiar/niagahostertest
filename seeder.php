<?php
$host = 'localhost';

// Database use name
$user = 'root';

//database user password
$pass = '';
$db = 'niagahoster_db';
$conn = mysqli_connect($host, $user, $pass);
//check connection
echo "Prepare Dabatase Configuration...<br>";
if (mysqli_connect_errno()){
	echo "...Koneksi database gagal : " . mysqli_connect_error();
}else{
    echo "...STATUS CONNECTION<br>";
    echo "......Connection is connected.<br>";
    echo "...STATUS DATABASE...<br>";
    //execute create DB
    // statement to execute
    $sql = 'SELECT COUNT(*) AS `exists` FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMATA.SCHEMA_NAME="niagahoster_db"';

    // execute the statement
    $query = $conn->query($sql);

    // extract the value
    $row = $query->fetch_object();
    $dbExists = (bool) $row->exists;
    if($dbExists == 1){
        echo "...Database niagahoster_db is exist.";
    }else{
        
        
        if ($conn->errno) {
            printf("###Could not create database niagahoster_db: %s<br />", $conn->error);
        }else{
            if ($conn->query("CREATE DATABASE niagahoster_db")) {
                printf("......Database niagahoster_db created successfully.<br />");
                //Select DB
                $db_select = mysqli_select_db( $conn, 'niagahoster_db' );

                if(! $db_select ) {
                    die('###Could not select database: ' . mysqli_error($conn));
                }else{
                    echo "...STATUS TABLES.<br>";
                    echo "......Prepare Configuration tb_fitur Table.<br>";
                    //Check Tables
                    $ct = "SHOW TABLES IN `niagahoster_db` WHERE `Tables_in_niagahoster_db` = 'tb_fitur'";
                    $result = $conn->query($ct);
                    // if the $result not False, and contains at least one row
                    if($result !== false) {
                        // if the $result contains at least one row, the table exists, otherwise, not exist
                        if ($result->num_rows > 0){ 
                            echo '.........The table "tb_fitur" exists';
                        }
                        else{ 
                            echo ".........The the tb_fitur does not exist, creating table is processing...<br>";
                            $sqltb_fitur = "CREATE TABLE `tb_fitur` (
                                `id` int(10) NOT NULL AUTO_INCREMENT,
                                `id_package` int(10) DEFAULT NULL,
                                `fitur_name` text DEFAULT NULL,
                                `fitur_value` text DEFAULT NULL,
                                `rate` int(2) DEFAULT NULL,
                                PRIMARY KEY (id)
                            ) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC";
                            if ($conn->query($sqltb_fitur)) {
                                printf("............Table tb_fitur created successfully.<br />");
                                //Seeder Table tb_fitur
                                $sfiturt = "INSERT INTO `tb_fitur` (`id`, `id_package`, `fitur_name`, `fitur_value`, `rate`) VALUES
                                (1, 1, 'Disk Space', '500 MB', 0),
                                (2, 1, 'Bandwidth', 'Unlimited', 0),
                                (3, 1, 'Databases', 'Unlimited', 0),
                                (4, 1, 'Domain', '1', 0),
                                (5, 1, 'Backup', 'Instant', 0),
                                (6, 1, 'Gratis Selamanya', 'Unlimited SSL', 0),
                                (7, 2, 'Disk Space', 'Unlimited', 0),
                                (8, 2, 'Bandwidth', 'Unlimited', 0),
                                (9, 2, 'POP3 Email', 'Unlimited', 0),
                                (10, 2, 'Databases', 'Unlimited', 0),
                                (11, 2, 'Addon Domains', '10', 0),
                                (12, 2, 'Backup', 'Instant', 0),
                                (13, 2, 'Selamanya', 'Domain Gratis', 0),
                                (14, 2, 'Gratis Selamanya', 'Unlimited SSL', 0),
                                (15, 3, 'Disk Space', 'Unlimited', 0),
                                (16, 3, 'Bandwidth', 'Unlimited', 0),
                                (17, 3, 'POP3 Email', 'Unlimited', 0),
                                (18, 3, 'Databases', 'Unlimited', 0),
                                (19, 3, 'Addon Domains', 'Unlimited', 0),
                                (20, 3, 'Backup', 'Instant', 0),
                                (21, 3, 'Selamanya', 'Domain Gratis', 0),
                                (22, 3, 'Gratis Selamanya', 'Unlimited SSL', 0),
                                (23, 3, 'Name Server', 'Private', 0),
                                (24, 3, 'Mail Protection', 'SpamAssasin', 0),
                                (25, 4, 'Disk Space', 'Unlimited', 0),
                                (26, 4, 'Bandwidth', 'Unlimited', 0),
                                (27, 4, 'POP3 Email', 'Unlimited', 0),
                                (28, 4, 'Dabatases', 'Unlimited', 0),
                                (29, 4, 'Addon Domains', 'Unlimited', 0),
                                (30, 4, 'Backup & Restore', 'Magic Auto', 0),
                                (31, 4, 'Selamanya', 'Domain Gratis', 0),
                                (32, 4, 'Gratis Selamanya', 'Unlimited SSL', 0),
                                (33, 4, 'Name Server', 'Private', 0),
                                (34, 4, 'Layanan Support', 'Prioritas', 5),
                                (35, 4, 'Pro Mail Protection', 'SpamExpert', 0)";

                                $resultSFitur = $conn->query($sfiturt);
                                // if the $result not False, and contains at least one row
                                if($resultSFitur !== false) {
                                    echo '...............Insert any data to tb_fitur success. <br>';
                                    echo '......Prepare Configuration tb_modul Table.<br>';
                                    //Check Tables Modul
                                    $cm = "SHOW TABLES IN `niagahoster_db` WHERE `Tables_in_niagahoster_db` = 'tb_modul'";
                                    $resultModul = $conn->query($cm);
                                    // if the $result not False, and contains at least one row
                                    if($resultModul !== false) {
                                        // if the $result contains at least one row, the table exists, otherwise, not exist
                                        if ($resultModul->num_rows > 0){ 
                                            echo '.........The table "tb_modul" exists';
                                        }
                                        else{ 
                                            echo ".........The the tb_modul does not exist, creating table is processing...<br>";
                                            $sqltb_modul = "CREATE TABLE `tb_modul` (
                                                `id` int(10) NOT NULL AUTO_INCREMENT,
                                                `modul` tinytext DEFAULT NULL,
                                                PRIMARY KEY (id)
                                              ) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC";
                                            if ($conn->query($sqltb_modul)) {
                                                printf("............Table tb_modul created successfully.<br />");
                                                //Seeder Table tb_fitur
                                                $smodult = "INSERT INTO `tb_modul` (`id`, `modul`) VALUES
                                                (1, 'IcePHP'),
                                                (2, 'http'),
                                                (3, 'nd_pdo_mysql'),
                                                (4, 'stats'),
                                                (5, 'apc'),
                                                (6, 'huffman'),
                                                (7, 'oauth'),
                                                (8, 'stem'),
                                                (9, 'apcu'),
                                                (10, 'idn'),
                                                (11, 'oci8'),
                                                (12, 'stomp'),
                                                (13, 'apm'),
                                                (14, 'igbinary'),
                                                (15, 'odbc'),
                                                (16, 'suhosin'),
                                                (17, 'ares'),
                                                (18, 'imagick'),
                                                (19, 'opcache'),
                                                (20, 'sybase_ct'),
                                                (21, 'bcmath'),
                                                (22, 'imap'),
                                                (23, 'pdf'),
                                                (24, 'sysvmsg'),
                                                (25, 'bcompiler'),
                                                (26, 'inclued'),
                                                (27, 'pdo'),
                                                (28, 'sysvsem'),
                                                (29, 'big_int'),
                                                (30, 'inotify'),
                                                (31, 'pdo_dblib'),
                                                (32, 'sysvshm'),
                                                (33, 'bitset'),
                                                (34, 'interbase'),
                                                (35, 'pdo_firebird'),
                                                (36, 'tidy'),
                                                (37, 'bloomy'),
                                                (38, 'intl'),
                                                (39, 'pdo_mysql'),
                                                (40, 'timezonedb'),
                                                (41, 'bz2_filter'),
                                                (42, 'ioncube_loader'),
                                                (43, 'pdo_odbc'),
                                                (44, 'trader'),
                                                (45, 'clamav'),
                                                (46, 'ioncube_loader_4'),
                                                (47, 'pdo_pgsql'),
                                                (48, 'translit'),
                                                (49, 'coin_acceptor'),
                                                (50, 'jsmin'),
                                                (51, 'pdo_sqlite'),
                                                (52, 'uploadprogress'),
                                                (53, 'crack'),
                                                (54, 'json'),
                                                (55, 'pgsql'),
                                                (56, 'uri_template'),
                                                (57, 'dba'),
                                                (58, 'ldap'),
                                                (59, 'phalcon'),
                                                (60, 'uuid')";

                                                $resultSModul = $conn->query($smodult);
                                                // if the $result not False, and contains at least one row
                                                if($resultSModul !== false) {
                                                    echo '...............Insert any data to tb_modul success.<br>';
                                                    echo '......Prepare Configuration tb_package Table.<br>';
                                                    //Check Tables Package
                                                    $cp = "SHOW TABLES IN `niagahoster_db` WHERE `Tables_in_niagahoster_db` = 'tb_package'";
                                                    $resultPackage = $conn->query($cp);
                                                    // if the $result not False, and contains at least one row
                                                    if($resultPackage !== false) {
                                                        // if the $result contains at least one row, the table exists, otherwise, not exist
                                                        if ($resultPackage->num_rows > 0){ 
                                                            echo '.........The table "tb_package" exists';
                                                        }
                                                        else{ 
                                                            echo ".........The the tb_package does not exist, creating table is processing...<br>";
                                                            $sqltb_package = "CREATE TABLE `tb_package` (
                                                                `id` int(10) NOT NULL AUTO_INCREMENT,
                                                                `package` varchar(20) DEFAULT NULL,
                                                                `price_month` int(50) DEFAULT NULL,
                                                                `price_disc` int(50) DEFAULT NULL,
                                                                `registered_user` int(10) DEFAULT NULL,
                                                                `resource_power` tinytext DEFAULT NULL,
                                                                `best_seller` int(2) DEFAULT NULL,
                                                                `button_value` tinytext DEFAULT NULL,
                                                                `rate` int(5) DEFAULT NULL,
                                                                PRIMARY KEY (id)
                                                              ) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC";
                                                            if ($conn->query($sqltb_package)) {
                                                                printf("............Table tb_package created successfully.<br />");
                                                                //Seeder Table tb_fitur
                                                                $spackaget = "INSERT INTO `tb_package` (`id`, `package`, `price_month`, `price_disc`, `registered_user`, `resource_power`, `best_seller`, `button_value`, `rate`) VALUES
                                                                (1, 'Bayi', 14900, 19900, 938, '0.5', 0, 'Pilih Sekarang', 0),
                                                                (2, 'Pelajar', 23450, 46900, 4168, '1', 0, 'Pilih Sekarang', 0),
                                                                (3, 'Personal', 38900, 58900, 10017, '2', 1, 'Pilih Sekarang', 0),
                                                                (4, 'Bisnis', 65900, 109900, 3552, '3', 0, 'Diskon 40%', 5)";

                                                                $resultSPackage = $conn->query($spackaget);
                                                                // if the $result not False, and contains at least one row
                                                                if($resultSPackage !== false) {
                                                                    echo '...............Insert any data to tb_package success.<br>';
                                                                    echo '......Proses Complete!!!<br>';
                                                                    ?><a href='./'>Kembali ke Halaman Utama</a><?php
                                                                }else{
                                                                    echo '...............Insert data tb_package is failed';
                                                                    
                                                                }
                                                            }
                                                            if ($conn->errno) {
                                                                printf("############Could not create tb_modul table: %s<br />", $conn->error);
                                                            }
                                                        }
                                                    }
                                                }else{
                                                    echo '...............Insert data tb_modul is failed';
                                                    
                                                }
                                            }
                                            if ($conn->errno) {
                                                printf("############Could not create tb_modul table: %s<br />", $conn->error);
                                            }
                                        }
                                    }
                                }else{
                                    echo '...............Insert data tb_fitur is failed';
                                }
                            }
                            if ($conn->errno) {
                                printf("############Could not create tb_fitur table: %s<br />", $conn->error);
                            }
                        }
                    }
                }
                
                    
            }
        }
    }
}

?>