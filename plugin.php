<?php

class sidebarBanners extends Plugin
{

	public function init()
	{
		$this->dbFields = array(
			'bannerImgURL' => '',
			'bannerLinkURL' => '',
			'bannerImgURL2' => '',
			'bannerLinkURL2' => '',
			'bannerImgURL3' => '',
			'bannerLinkURL3' => '',
			'bannerImgURL4' => '',
			'bannerLinkURL4' => '',
			'bannerImgURL5' => '',
			'bannerLinkURL5' => '',
      'bannerCustomCSS' => ''
		);
	}

	public function form()
	{
		global $L;

		$html  = '<div class="alert alert-primary" role="alert">';
		$html .= 'サイドバー（siteSidebar）プラグイン対応のテーマでのみ動作します。';
		$html .= '</div>';

    $html .= '<h4 class="mt-3">バナー設定</h4>';

    $html .= '<h5 class="mt-3">バナー1</h5>';
		$html .= '<div>';
		$html .= '<label>バナー画像のURL</label>';
		$html .= '<input name="bannerImgURL" class="form-control" type="url" pattern="http.*://.*" dir="auto" value="' . $this->getValue('bannerImgURL') . '">';
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>バナーのリンク先URL</label>';
		$html .= '<input name="bannerLinkURL" class="form-control" type="url" pattern="http.*://.*" dir="auto" value="' . $this->getValue('bannerLinkURL') . '">';
		$html .= '</div>';

		$html .= '<h5 class="mt-3">バナー2</h5>';
		$html .= '<div>';
		$html .= '<label>バナー画像のURL</label>';
		$html .= '<input name="bannerImgURL2" class="form-control" type="url" pattern="http.*://.*" dir="auto" value="' . $this->getValue('bannerImgURL2') . '">';
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>バナーのリンク先URL</label>';
		$html .= '<input name="bannerLinkURL2" class="form-control" type="url" pattern="http.*://.*" dir="auto" value="' . $this->getValue('bannerLinkURL2') . '">';
		$html .= '</div>';

		$html .= '<h5 class="mt-3">バナー3</h5>';
		$html .= '<div>';
		$html .= '<label>バナー画像のURL</label>';
		$html .= '<input name="bannerImgURL3" class="form-control" type="url" pattern="http.*://.*" dir="auto" value="' . $this->getValue('bannerImgURL3') . '">';
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>バナーのリンク先URL</label>';
		$html .= '<input name="bannerLinkURL3" class="form-control" type="url" pattern="http.*://.*" dir="auto" value="' . $this->getValue('bannerLinkURL3') . '">';
		$html .= '</div>';

		$html .= '<h5 class="mt-3">バナー4</h5>';
		$html .= '<div>';
		$html .= '<label>バナー画像のURL</label>';
		$html .= '<input name="bannerImgURL4" class="form-control" type="url" pattern="http.*://.*" dir="auto" value="' . $this->getValue('bannerImgURL4') . '">';
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>バナーのリンク先URL</label>';
		$html .= '<input name="bannerLinkURL4" class="form-control" type="url" pattern="http.*://.*" dir="auto" value="' . $this->getValue('bannerLinkURL4') . '">';
		$html .= '</div>';

		$html .= '<h5 class="mt-3">バナー5</h5>';
		$html .= '<div>';
		$html .= '<label>バナー画像のURL</label>';
		$html .= '<input name="bannerImgURL5" class="form-control" type="url" pattern="http.*://.*" dir="auto" value="' . $this->getValue('bannerImgURL5') . '">';
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>バナーのリンク先URL</label>';
		$html .= '<input name="bannerLinkURL5" class="form-control" type="url" pattern="http.*://.*" dir="auto" value="' . $this->getValue('bannerLinkURL5') . '">';
		$html .= '</div>';

    $html .= '<h4 class="mt-3">CSS設定</h4>';
		$html .= '<div>';
		$html .= '<label>カスタムCSS</label>';
		$html .= '<textarea name="bannerCustomCSS">' . $this->getValue('bannerCustomCSS') . '</textarea>';
		$html .= '<span class="tip">空欄の場合はおすすめ設定を適用します。</span>';
		$html .= '</div>';

		$html .= '<h4 class="mt-3">HTML出力例</h4>';
		$html .= '<div class="bg-secondary" --bs-bg-opacity: .15;">';
		$html .= '<pre class="text-white p-2">';
		$html .= '&lt;!-- サイドバーバナー --&gt<br>';
		$html .= '&lt;div class=&quot;plugin banners&quot;&gt<br>';
		$html .= '&lt;a class=&quot;banner-1&quot; href=&quot;https://example.com&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;http://example.com/banner1.png&quot;&gt;<br>';
		$html .= '&lt;a class=&quot;banner-2&quot; href=&quot;https://example.com&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;http://example.com/banner2.png&quot;&gt;<br>';
		$html .= '&lt;/div&gt;<br>';
		$html .= '</pre>';
		$html .= '</div>';

		return $html;
	}


	public function siteSidebar()
	{
		if ($this->getValue('bannerImgURL')) {
			$bannerImg = '<a class="banner-1" href="' . $this->getValue('bannerLinkURL') . '" target="_blank"><img src="'. $this->getValue('bannerImgURL') .'"></a>'.PHP_EOL;
		}

		if ($this->getValue('bannerImgURL2')) {
			$bannerImg2 = '<a class="banner-2" href="' . $this->getValue('bannerLinkURL2') . '" target="_blank"><img src="'. $this->getValue('bannerImgURL2') .'"></a>'.PHP_EOL;
		}

		if ($this->getValue('bannerImgURL3')) {
			$bannerImg3 = '<a class="banner-3" href="' . $this->getValue('bannerLinkURL3') . '" target="_blank"><img src="'. $this->getValue('bannerImgURL3') .'"></a>'.PHP_EOL;
		}

		if ($this->getValue('bannerImgURL4')) {
			$bannerImg4 = '<a class="banner-4" href="' . $this->getValue('bannerLinkURL4') . '" target="_blank"><img src="'. $this->getValue('bannerImgURL4') .'"></a>'.PHP_EOL;
		}

		if ($this->getValue('bannerImgURL5')) {
			$bannerImg5 = '<a class="banner-5" href="' . $this->getValue('bannerLinkURL5') . '" target="_blank"><img src="'. $this->getValue('bannerImgURL5') .'"></a>'.PHP_EOL;
		}
		// コメントと開始タグを出力
		echo '<!-- サイドバーバナー -->'.PHP_EOL;
		echo '<div class="plugin banners">'.PHP_EOL;

		// バナー1を出力
		if ($this->getValue('bannerImgURL')) {
			echo  $bannerImg;
		}

		// バナー2を出力
		if ($this->getValue('bannerImgURL2')) {
			echo  $bannerImg2;
		}

		// バナー3を出力
		if ($this->getValue('bannerImgURL3')) {
			echo  $bannerImg3;
		}

		// バナー4を出力
		if ($this->getValue('bannerImgURL4')) {
			echo  $bannerImg4;
		}

		// バナー5を出力
		if ($this->getValue('bannerImgURL5')) {
			echo  $bannerImg5;
		}

		// 閉じタグを出力
		echo  '</div>'.PHP_EOL;

	}

	public function siteHead()
  {
		if ($this->getValue('bannerCustomCSS')) {
			// カスタムCSSが入力されているときはそれを使用
			$bannerCustomCSS = $this->getValue('bannerCustomCSS');
		} else {
			// カスタムCSSが入力されていないときは下記のおすすめ設定を使用
			$bannerCustomCSS = <<<EOF
		.banners {
		  width: 200px;
		  display: flex;
		  flex-direction: row;
		  flex-wrap: wrap;
		}

		  .banners a {
		  margin-right: 8px;
		  margin-bottom: 8px;
		}
		EOF;
		}

		//出力するコードの内容
		$codeCSS  = '<!-- サイドバーバナー用CSS -->';
		$codeCSS .= '<style>';
		$codeCSS .= $bannerCustomCSS;
		$codeCSS .= '</style>';

		return $codeCSS;
  }
}
