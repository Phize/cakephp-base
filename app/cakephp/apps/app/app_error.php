<?php
/**
 * エラーハンドラークラス
 *
 * アプリケーションのエラーハンドラー
 */
class AppError extends ErrorHandler {
	/**
	 * アプリケーションの設定
	 *
	 * @var array
	 */
	protected $config = array();



	/**
	 * コンストラクター
	 *
	 * @param string $method エラー処理用のメソッド名
	 * @param array $messages エラーメッセージ
	 */
	function __construct($method, $messages) {
		$this->config = Configure::read('App');

		parent::__construct($method, $messages);
	}

	/**
	 * 404エラー
	 *
	 * @param array $params パラメーター
	 */
	public function error404($params) {
		extract($params, EXTR_OVERWRITE);

		if (!isset($url)) {
			$url = $this->controller->here;
		}
		$url = Router::normalize($url);
		$this->controller->header("HTTP/1.0 404 Not Found");
		$this->controller->set(array(
			'code' => '404',
			'name' => __('Not Found', true),
			'message' => h($url),
			'base' => $this->controller->base
		));
		$this->controller->set('config', $this->config);
		$this->controller->set('title_for_layout', '404 Not Found');

		$this->_outputMessage('error404');
	}
}
