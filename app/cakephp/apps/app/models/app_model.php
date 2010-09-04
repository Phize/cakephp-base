<?php
/**
 * アプリケーションモデルクラス
 *
 * アプリケーションの全全モデルはこのクラスを継承する
 */
class AppModel extends Model {
	/**
	 * ビヘイビア
	 *
	 * @var array
	 */
//	public $actsAs = array('containable');

	/**
	 * アソシエーションのレベル
	 *
	 * @var integer
	 */
//	public $recursive = -1;

	/**
	 * アプリケーションの設定
	 *
	 * @var array
	 */
	protected $config = array();



	/**
	 * コンストラクター
	 *
	 * @param mixed $id モデルのID、またはオプション配列
	 * @param string $table 使用するデータベースのテーブル名
	 * @param string $ds データソースの接続名
	 */
	public function  __construct($id = false, $table = null, $ds = null) {
        if (isset($_SERVER['CAKE_ENV']) && $_SERVER['CAKE_ENV'] === 'development') {
            $dbAvailable = in_array($_SERVER['CAKE_ENV'], array_keys(ConnectionManager::enumConnectionObjects()));
            $this->useDbConfig = $dbAvailable ? $_SERVER['CAKE_ENV'] : $this->useDbConfig;
        }

		parent::__construct($id, $table, $this->useDbConfig);

		$this->config = Configure::read('App');
	}
}
