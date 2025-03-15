# サイドバーバナー

## 概要
[Bludit CMS](https://bludit.com/)のテーマサイドバーにリンクバナーを設置するプラグインです。<br>
同人サイトでよく使用される幅200px以下のバナーに対応しています。バナーは最大5個まで設置できます。

**サイドバー（siteSidebar）プラグイン対応のテーマでのみ動作します。**

## 設定方法
プラグインを[ダウンロード](https://github.com/sakanafurai/sidebar-banners/releases/download/v1.0.1/sidebar-banners.zip)

1. zipファイルを解凍し、```sidebar-banners```フォルダを```bludit```ディレクトリ内の```bl-plugin```ディレクトリにコピーする。
2. Bluditの管理画面の『プラグイン』のページで「サイドバーバナー」を有効化する。
3. 「サイドバーバナー」の設定ボタンを押す。
4. 表示したいバナー画像のURLとリンク先URLを入力する。
5. 「保存」ボタンを押して変更を保存する。
6. 『ウェブサイト』からサイトを開き、バナーが設定したとおりに表示されているか確認する。

## CSS設定

デフォルトではサイドバーバナー用にheadに下記の内容のCSSが追加されます。
適度に間隔を空け、200px幅バナーは縦に並び、小さいバナーは合計幅が200pxになるまで横並びになります。

```
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

```

オリジナルのCSS設定を使用したい場合は、『カスタムCSS』に入力することで変更できます。

## ライセンス
MIT
