<?php


class cart {
    public $items = [];
  

     // Constructor - nếu chưa có giỏ hàng trong session thì tạo giỏ hàng mới
    public function _construct(){
        if(isset($_SESSION['carts']) && !empty($_SESSION['carts'])) {
            $this->item = $_SESSION['carts']; 
        }
    }

    // thêm vào giỏ hàng
    public function add($product) {
        $productId = $product['product_id'];
        if (isset($this->items[$productId])) {
            // Tăng số lượng nếu sản phẩm đã có trong giỏ hàng
            $this->items[$productId]['quantity']++;
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            $this->items[$productId] = $product;
            // Đặt số lượng ban đầu là 1
            $this->items[$productId]['quantity'] = 1;
        }
        $this->setCart();  // Cập nhật lại session
    }
    

    //cập nhật giỏ hàng
    public function update($productId, $quantity) {
        if(isset($this->item[$productId])) {
            if($quantity > 0) {
                //cập nhật số lượng mới
                $this->item[$productId]['quantity'] = $quantity;
            }else{
                $this->remove($productId);  // Nếu số lượng <= 0 thì xóa sản phẩm khỏi giỏ
            }
        }
        //cập nhật lại session
        $this->setCart();
   }
    // Xóa sản phẩm khỏi giỏ hàng
    public function remove($productId) {
        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);  // Xóa sản phẩm khỏi giỏ
        }
    
        $this->setCart();  // Cập nhật lại session
    }
    

    // Lưu giỏ hàng vào session
    private function setCart()
    {
        $_SESSION['carts'] = $this->items;  // Lưu giỏ hàng vào session
    }

    // Lấy tất cả các sản phẩm trong giỏ
    public function getCart()
    {
        return $this->items;
    }

    // Tính tổng giá trị giỏ hàng
    public function getTotal()
    {
        $sum = 0;
        foreach ($this->items as $product) {
            $sum += $product['quantity'] * $product['price'];  // Tính tổng tiền theo số lượng và giá
        }
        return $sum;
    }
}
?>