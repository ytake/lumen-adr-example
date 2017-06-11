# Implementing ADR in Lumen

このサンプルは [Lumen](https://github.com/laravel/lumen) を使ってADRパターンで実装しています。  
DomainはDDD風の実装になっていますが、  
ADRのDomainは DDD で実装しなければならないという意味ではありません。  
(このサンプルはDDD風の実装例としても公開しているため)  
実際に実装する場合は、ORMなどを利用してシンプルに実装するなど、  
アプリケーションの規模に合わせて実装してください。  
小さいアプリケーションではこの実装例を採用すると、大げさすぎる実装となり、  
かえってアプリケーションが複雑になる可能性があります。　　

ご利用は計画的に

## What is ADR

[Action-Domain-Responder](http://pmjones.io/adr/)
