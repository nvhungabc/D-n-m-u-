 <?php
function layDSSanPham()
        {
            if (isset($_POST['key']) && ($_POST['key'] != "")) {
                $key = $_POST['key'];
                $sql = "SELECT * FROM xe WHERE ten_xe  like '%$key%'"; 
                $list_sp = getData($sql, FETCH_ALL);
            } else {
               if(isset($_POST['price']))
                {
                    $prices = $_POST['prices']; 
                    if($prices=="3"){
                        $sql = "SELECT * FROM xe Where price > 1000000000  ";
                        $list_sp = getData($sql, FETCH_ALL);
                    }
                    elseif($prices == "4"){
                        $sql = "SELECT * FROM xe  ";
                        $list_sp = getData($sql, FETCH_ALL);
                    }
                    else{
                        $sql = "SELECT * FROM xe Where price <= $prices  ";
                        $list_sp = getData($sql, FETCH_ALL);
                    } 
                }
                
                else{
                    $sql = "SELECT * FROM xe";
                    $list_sp = getData($sql, FETCH_ALL);
                }
             
            }
            return $list_sp;
        }
        function lay1SanPham()
        {
            if (isset($_GET['ma_xe'])) {
                $ma_xe = $_GET['ma_xe'];
                $sql = "SELECT * FROM xe  WHERE ma_xe= $ma_xe
        ";
                $sp_ct = getData($sql, FETCH_ONE);
                return $sp_ct;
            }
        }
        function thongTinKhachHang()
        {
            if (isset($_SESSION['ma_kh'])) {
                $ma_kh = $_SESSION['ma_kh'];
                $sql = "SELECT * FROM khach_hang where ma_kh=$ma_kh ";
                $thong_tin_kh = getData($sql, FETCH_ONE);
                return $thong_tin_kh;
            }
        }
        function binhLuans()
        {
            if (isset($_POST['btn_bl'])) {
                $user = $_POST['user'];
                $noidung = $_POST['noidung'];
                $ma_kh = $_SESSION['ma_kh'];
                $ma_xe = $_GET['ma_xe'];
                if ($user != "" && $noidung != "") {
                    $sql = 
                    
                    "INSERT INTO binh_luan (`id_bl`, `ma_kh`, `ma_xe`, `noidung`, `user`, `thoi_gian_bl`) VALUES (null,'$ma_kh','$ma_xe','$noidung','$user',current_timestamp())"
                    
                    
                    
                    ;
                    $conn = getConnect();
                    $statement = $conn->prepare($sql);
                    $statement->execute();
                }
            }
        }

        function binhLuan()
        {
            if (isset($_GET['ma_xe'])) {
                $ma_xe = $_GET['ma_xe'];
                $sql = "SELECT * FROM binh_luan  WHERE ma_xe=$ma_xe order by ma_xe desc limit 0,3 
            ";
                $sp_cts = getData($sql, FETCH_ALL);
                return $sp_cts;
            }
        }
        // // out sản phẩm theo danh mục
        function laySanPhamTheoDM($ma_loai)
        {
            $sql = "SELECT * FROM  xe where 1 AND ma_loai= $ma_loai ";

            $sp_dms = getData($sql, FETCH_ALL);
            return $sp_dms;
        }
        function SanPhamCungLoai4()
        {
            if (isset($_GET['ma_loai']) && isset($_GET['ma_xe'])) {
                $ma_loai = $_GET['ma_loai'];
                $ma_xe = $_GET['ma_xe'];
                $sql = "SELECT * FROM  xe where 1 AND ma_loai= $ma_loai AND ma_xe <> $ma_xe limit 0,4";
                $sp_cl = getData($sql, FETCH_ALL);
                return $sp_cl;
            }
        }
        ?> 