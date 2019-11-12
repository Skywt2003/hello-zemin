# Hello Zemin!

Get a random sentence from Zemin.

## Intro

随机显示一句「长者三篇」中的长者语录。

灵感源于 WordPress 插件 Hello Zemin。

## Demo

[https://skywt.cn/zemin/](https://skywt.cn/zemin/)

## Usage

请求方式为 GET，只有一个可选参数 `encode`，即编码方式。

可以为 `js`、`text`、`img`，默认为 `text`。

## Examples

### JavaScript

与[一言网](https://hitokoto.cn/)类似：

```
<script src="https://skywt.cn/zemin/?encode=js" defer></script>
<span id="zemin">长者语录 获取中...</span>
```

效果：可访问 [https://skywt.cn/passages/](https://skywt.cn/passages/) 在底部查看。

### 纯文本

请直接访问：[https://skywt.cn/zemin/](https://skywt.cn/zemin/)

### 图片

注意：需要安装 php 的 GD 拓展。

图片字体为 900 磅思源宋体。

在 Markdown 中：

```
![quote](https://skywt.cn/zemin/?encode=img)
```

效果：

![quote](https://skywt.cn/zemin/?encode=img)

（Github 中图片会有缓存，所以刷新页面后以上图片可能不更新。可以访问 [https://skywt.cn/zemin/?encode=img](https://skywt.cn/zemin/?encode=img) 查看效果）

## Todo

咕咕咕一时爽，一直咕一直爽

- [ ] 优化图片大小处理，适应句子长度。
- [ ] 支持返回「长者三篇」中指定篇目的语录。
- [ ] 收录[更多语录](https://zh.wikiquote.org/zh/%E6%B1%9F%E6%B3%BD%E6%B0%91)。
- [ ] 以 svg 形式返回。
