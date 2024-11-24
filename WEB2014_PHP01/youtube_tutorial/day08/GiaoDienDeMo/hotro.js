/** xây dựng hàm sinh ID tự động, output là chuỗi ID duy nhất
 */
function taoId(){
    var id = '';
    //sinh Id
    id = Math.random().toString()+"_"+ String(new Date().getTime());
    return id;
}
//UUID