##第四組
組員：<BR>
0124001陳俊豪<BR>
0124017郭威誠<BR>
0124059王以德<BR>
0124061蔡易軒<BR>
0124091葉名峻<BR>


## 1.利害關係人目標表 (如表3.8 P.85) ##
![](http://i.imgur.com/K2Kd4ag.jpg)

## 2.事件與使用案例表 (如表3.9 P87) ##
![](http://i.imgur.com/vIuOra2.jpg)

## 3.使用案例圖 (如 圖4.18 P.120)  ##
![](http://i.imgur.com/EX70iID.jpg)

## 4.個別使用案例的描述 (如 表4.9 P117) ##
![](http://i.imgur.com/18RbhIF.jpg)
![](http://i.imgur.com/BflG8Gk.jpg)
![](http://i.imgur.com/G05Ogo4.jpg)
![](http://i.imgur.com/uarUC7L.jpg)
![](http://i.imgur.com/gdV0UQ2.jpg)

## 5.個別使用案例的活動圖 (如圖4.15 P114) ##
![](http://i.imgur.com/Ma1tets.jpg)
![](http://i.imgur.com/tqQCi4M.jpg)
![](http://i.imgur.com/cU1hgY9.jpg)
![](http://i.imgur.com/CWMFBi3.jpg)
![](http://i.imgur.com/4HhUDfT.jpg)

## 6.每個使用案例的名詞與概念類別列舉表 (p129 表5.4) ##
![](http://i.imgur.com/Lgksruu.jpg)
![](http://i.imgur.com/473LCPx.jpg)
![](http://i.imgur.com/zZOQxvf.jpg)
![](http://i.imgur.com/KDKp4Gx.jpg)
![](http://i.imgur.com/ZYqFrVT.jpg)

## 7.每個使用案例的初步類別圖 (p137 圖5.13 註:屬性需加入visibility + data type 以及屬於哪種類別boundary entity controller) ##
(一).店家基本資料作業
![](http://i.imgur.com/JY3GeCS.jpg)
![](http://i.imgur.com/ASjCVaM.jpg)
![](http://i.imgur.com/2Z6pxA6.jpg)
![](http://i.imgur.com/wCs5kCL.jpg)
![](http://i.imgur.com/jqucuCE.jpg)

## 8.最後整個系統的初步類別圖 (p151 圖5.30 註:屬性需加入visibility + data type以及屬於哪種類別boundary entity controller) ##
![](http://i.imgur.com/PB0Z47d.jpg)

## 9.使用案例主要成功情節之英文名稱事件對應(表6.5 p169）) ##
# (一).店家基本資料作業 #
<table>
<tr>
<td markdown="1">使用案例：店家基本資料作業</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
主要成功情節：<BR>
1 當顧客進入商品基本資料作業畫面，並啟動新增按鍵。<BR>
2 顧客輸入店家基本資料，包括店家編號、店家名稱、店家介紹、店家價格、店家地址、店家時間及店家網址。<BR>
3 系統檢查輸入格式，如果有誤要求重新輸入。檢查是否有重覆店家編號。<BR>
4 輸入完畢後，選取儲存健，或取消鍵。<BR>
系統重複1-3的動作。<BR>
5 如果要進行修改，選取修改按鈕，並可依據任一個欄位進行查詢，讀取所要修改之店家記錄。修改完，按確認鍵或取消鍵。<BR>
6 系統檢查輸入格式，如果有誤要求重新輸入。檢查是否有重覆店家編號。<BR>
7 如果要進行刪除，選取刪除按鍵，並可依據任一個欄位進行查詢，讀取所要刪除之店家記錄。<BR>
8 回到商品基本資料作業<BR>
</td>
<td markdown="1">
inputProduct() inputStores(); <BR>
<BR>
<BR>
<BR>
<BR>
checkItem(StoresItem) <BR>
saveStoresRec(Stores Rec) <BR>
modifyStores(storesID,storesName, storesInfo) <BR>
checkItem(StoresItem) saveStoresRec(Stores Rec) <BR>
deleteStores(storesID,storesName, storesInfo)<BR>
</td>
</table>
</td>
</tr>
</table>
BY 0124059 王以德
# (二).店家資訊分類 #
# (三).客戶特性分析作業 #
# (四).查詢作業 #
# (五).顧客針對店家留言 #
## 10.每個名稱事件之合約(表6.6 p169) ##
# (一).店家基本資料作業 #
<table>
<tr>
<td markdown="1">合約1：inputStores()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：inputStores()<BR>
交互參照：商店基本資料作業<BR>
前置條件：存在類別Stores之實例newStores<BR>
後置條件：-檢查並確認實例newStores之storesName、storesInfo、屬性隻起始值為空白<BR>
-給定實例 newProduct之屬性productID最新商品編號<BR>
-回傳productID<BR>
</td>
</table>
</td>
</tr>
</table>

<table>
<tr>
<td markdown="1">合約2：checkItem(StoresItem)()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：checkItem(StoresItem)<BR>
交互參照：商店基本資料作業<BR>
前置條件：已開啟：Stores物件<BR>
後置條件：-檢查Product之屬性storesName、storesInfo之格式是否正確與是否重複<BR>
-回傳itemMessage<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約3：saveStoresRec(stores Rec)</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：saveStoresRec(Stores Rec)<BR>
交互參照：商店基本資料作業<BR>
前置條件：存在類別Stores實例stores<BR>
後置條件：-將stores存入資料庫中<BR>
-回傳saveSuccess<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約4：modifyStores(storesID,storesName,storesinfo)</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：modifyStores(storesID,storesName,storesinfo)<BR>
交互參照：商店基本資料作業<BR>
前置條件：存在類別Stores實例stores<BR>
後置條件：-根據storesID或storesName讀取商品基本資料storesRec，並存入至物件stores之屬性中<BR>
-回傳storesRec<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約5：deleteStores(storesID,storesName,storesinfo)</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：deleteStores(storesID,storesName,storesinfo)<BR>
交互參照：商店基本資料作業<BR>
前置條件：存在Stores實例stores<BR>
後置條件：-根據storesID或storesName讀取商品基本資料storesRec<BR>
-刪除店家基本資料storesRec<BR>
- 回傳deleteSuccess<BR>
</td>
</table>
</td>
</tr>
</table>
BY 0124059 王以德
# (二).店家資訊分類 #
# (三).客戶特性分析作業 #
# (四).查詢作業 #
# (五).顧客針對店家留言 #

## 11.使用案例之系統循序圖(圖6.13 p170) ##
# (一).店家基本資料作業 #
Store
- 
![](http://i.imgur.com/OYUkVT3.png)

# (二).店家資訊分類 #
# (三).客戶特性分析作業 #
# (四).查詢作業 #
# (五).顧客針對店家留言 #

