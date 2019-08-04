<?php
namespace AHT\Blog\Model;

//quản lý dữ liệu trong bảng 
use AHT\Blog\Api\Data\PostInterface;
// Lớp model này sẽ kế thừa lớp Magento\Framework\Model\AbstractModel và implements \Magento\Framework\DataObject\IdentityInterface. IdentityInterface sẽ buộc model định nghĩa phương thức getIdentities( ) sẽ trả về một id duy nhất cho model.
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface, PostInterface
{
	//Với một từ khóa "const" nằm trước một khai báo biến, bạn sẽ làm cho biến này thành một biến chỉ có thể đọc "read-only" biến toàn cục ko thay đổi fix cứng
	const CACHE_TAG = 'aht_blog_post';

	protected $_cacheTag = 'aht_blog_post';

	protected $_eventPrefix = 'aht_blog_post';

	protected function _construct()
	{

		//init khởi tao 1 mô hình chuẩn // nó điểu hướng sang post
		$this->_init('AHT\Blog\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		//Trả lại (các) ID duy nhất cho từng đối tượng trong hệ thống
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}