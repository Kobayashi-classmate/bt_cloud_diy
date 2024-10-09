## 部署方法

- 下载最新版的Release包
- 如果是下载的源码包，需要执行 `composer install --no-dev` 安装依赖，如果是下载的Release包，则不需要
- 设置网站运行目录为`public`
- 设置伪静态为`ThinkPHP`
- 访问网站，会自动跳转到安装页面，根据提示安装完成

## 更新方法

- 下载最新版的Release包
- 上传覆盖除data文件夹以外的全部文件
- 后台使用批量替换工具->获取最新插件列表->修改Linux面板等版本号

## 更新WAF版本信息

- 访问  `官方WAF的api接口域名/bt_waf/latest_version` 获取最新版本信息
- 将返回的内容中的 `data` 值的内容复制粘贴至对应文本框里解析即可
