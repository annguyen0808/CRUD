<?php
namespace AHT\Blog\Model\ResourceModel;

// Tất cả resource model CRUD đều phải kế thừa \Magento\Framework\Model\ResourceModel\Db\AbstractDb
// AbstractDb chứa các chức năng tìm nạp thông tin CSDL.
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	//Như lớp model, lớp resource model này sẽ có phương thức _construct (). Phương thức này sẽ gọi hàm _init () để xác định tên bảng và khóa chính cho bảng đó. Trong ví dụ này, chúng ta có bảng aht_blog_post và khóa chính post_id.
	protected function _construct()
	{
		$this->_init('aht_blog_post', 'post_id');
	}
	
}