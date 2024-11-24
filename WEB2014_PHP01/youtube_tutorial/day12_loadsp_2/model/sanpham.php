<?php
function themsp($tensp, $img, $gia, $iddm)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_sanpham (tensp,img,gia,iddm) VALUES ('" . $tensp . "','" . $img . "','" . $gia . "','" . $iddm . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
// function deldm($id){
//     $conn=connectdb();
//     $sql = "DELETE FROM tbl_sanpham WHERE id=".$id;
//     // use exec() because no results are returned
//     $conn->exec($sql);
// }
// function updatedm($id,$tendm){
//     $conn=connectdb();
//     $sql = "UPDATE tbl_sanpham SET tendm='".$tendm."' WHERE id=".$id;
//     // Prepare statement
//     $stmt = $conn->prepare($sql);
//     // execute the query
//     $stmt->execute();
// }
// function getonedm($id){
//     $conn=connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=".$id);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq=$stmt->fetchAll();
//     return $kq;
// }

// Truy suất tất cả sản phẩm
function getall_sp($iddm)
{
    $conn = connectdb();
    $sql = "SELECT * FROM tb_sanpham WHERE 1";
    if ($iddm > 0) {
        $sql .= " AND iddm =" . $iddm;
    }
    $sql .= " order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function getspecial_products()
{
    $conn = connectdb();
    $sql = "SELECT * FROM tb_sanpham WHERE 1";
    $sql .= " AND special = 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

// Search: Tìm kiếm sản phẩm
function search_products($iddm = 0, $keywords = "")
{
    $conn = connectdb();
    $sql = "SELECT * FROM tb_sanpham WHERE 1";
    if ($iddm > 0) {
        $sql .= " AND iddm =" . $iddm;
    }
    // Search theo danh mục
    if ($keywords != "") {
        $sql .= " AND tendanhmuc like'%" . $iddm . "%'";
    }

    // Search theo sản phẩm thì dùng câu lệnh nào ?

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function showproduct($ds)
{
    foreach ($ds as $itemsp) {
        # code... --> Phần tính toán bị lỗi !!!!
        // if ($itemsp['gia'] == 0) {
        //     $gia = "Đang cập nhật";
        // } else {
        //     if ($sp['giacu'] > 0) {
        //         $gia = '<del>' . "$" . $itemsp['giacu'] . '</del>$' . $itemsp['gia'];
        //     } else {
        //         $gia = "$" . $itemsp['gia'];
        //     }
        // }

        // $sale = $itemsp['giacu'] ? $itemsp['giacu'] / $item['gia'] * 100 : "";
        // echo '<h2>' . var_dump($itemsp) . '</h2>';
        echo '
                        <div class="column">
                        <div class="product">
                            <div class="sale">Sale!</div>
                            <img class="img-product" src="./uploads/' . $itemsp['img'] . '" alt="">
                            <div class="price">
                                <span>
                                <del>' . "$" . $itemsp['giacu'] . '</del>$' . $itemsp['gia'] . '
                                </span>
                            </div>
                            <div class="infor-product">
                                <p>' . $itemsp['tensp'] . '</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                    </div>
                        ';
    }
}