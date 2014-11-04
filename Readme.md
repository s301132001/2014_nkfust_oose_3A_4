
## 第四組 - 好評網 ##
組員：<BR>
0124001陳俊豪<BR>
0124017郭威誠<BR>
0124059王以德<BR>
0124061蔡易軒<BR>
0124091葉名峻<BR>

摘要:依據時下流行的實用網站-愛評網，我們希望也能打造出一個屬於我們的台灣生活流行地圖，讓我們可以到處蒐集喜歡的店家、景點，以及透過他人的資訊來讓自己可以做的選擇變多。<BR>

## 1.利害關係人目標表 (如表3.8 P.85) ##
![](http://i.imgur.com/K2Kd4ag.jpg)

## 2.事件與使用案例表 (如表3.9 P87) ##
![](http://i.imgur.com/vIuOra2.jpg)

## 3.使用案例圖 (如 圖4.18 P.120)  ##
![](http://i.imgur.com/EX70iID.jpg)

## 4.個別使用案例的描述 (如 表4.9 P117) ##
![](http://i.imgur.com/18RbhIF.jpg)
![](http://i.imgur.com/BflG8Gk.jpg)
![](http://i.imgur.com/VdnW6sa.jpg)
![](http://i.imgur.com/uarUC7L.jpg)
![](http://i.imgur.com/gdV0UQ2.jpg)

## 5.個別使用案例的活動圖 (如圖4.15 P114) ##
![](http://i.imgur.com/Ma1tets.jpg)
![](http://i.imgur.com/tqQCi4M.jpg)
![](http://i.imgur.com/J68XLqq.jpg)
BY  0124091葉名峻<BR>
![](http://i.imgur.com/CWMFBi3.jpg)
![](http://i.imgur.com/4HhUDfT.jpg)

## 6.每個使用案例的名詞與概念類別列舉表 (p129 表5.4) ##
![](http://i.imgur.com/Lgksruu.jpg)
![](http://i.imgur.com/473LCPx.jpg)
![](http://i.imgur.com/erAvoSJ.jpg)
![](http://i.imgur.com/KDKp4Gx.jpg)
![](http://i.imgur.com/ZYqFrVT.jpg)

## 7.每個使用案例的初步類別圖 (p137 圖5.13 註:屬性需加入visibility + data type 以及屬於哪種類別boundary entity controller) ##
(一).店家基本資料作業<BR>
![](http://i.imgur.com/r7ElEgK.jpg)
BY 0124059 王以德<BR>
(二).店家資訊分類<BR>
![](http://i.imgur.com/CRWG9ge.jpg?1)
BY 0124001 陳俊豪<BR>
![](http://i.imgur.com/T8NYaYr.png?1)
BY 0124091 葉名峻<BR>
(四).查詢作業<BR>
![](http://i.imgur.com/oc60jQ6.jpg)
BY 0124061 蔡易軒<BR>
(五).顧客針對店家留言<BR>
![](http://i.imgur.com/6rzcUXU.jpg)
BY 0124017 郭威誠<BR>

## 8.最後整個系統的初步類別圖 (p151 圖5.30 註:屬性需加入visibility + data type以及屬於哪種類別boundary entity controller) ##
![](http://i.imgur.com/S8Lzcl2.png)

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
inputStores() <BR>
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
<table>
<tr>
<td markdown="1">使用案例：店家基本資訊分類</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
主要成功情節：<BR>
1 當決策者要輸入店家提供的食物分類時，決策者進入新增分類畫面，並啟動新增鍵。<BR>
2 決策者輸入店家提供的食物分類。<BR>
3 系統檢查輸入格式，如果有誤要求重新輸入。檢查是否有重覆食物分類。<BR>
4 輸入完畢後，選擇儲存鍵，或是取消鍵。<BR>
系統重複1-3的動作。<BR>
5 如果要進行修改，選取修改按鈕，並可依據任一個欄位進行查詢，讀取所要修改之食物分類記錄。修改完，按確認鍵或取消鍵。<BR>
6 系統檢查輸入格式，如果有誤要求重新輸入。檢查是否有重覆分類系統。<BR>
7 如果要進行刪除，選取刪除按鍵，並可依據任一個欄位進行查詢，讀取所要刪除之分類記錄。<BR>
8 回到食物分類畫面<BR>
</td>
<td markdown="1">
inputStores() ; <BR>
<BR>
<BR>
<BR>
<BR>
checkFoodClassification <BR>
saveFoodClassificationRec(FoodClassification Rec) <BR>
modifyFoodClassification <BR>
checkFoodClassification saveFoodClassificationRec(FoodClassification Rec) <BR>
deleteFoodClassification<BR>
</td>
</table>
</td>
</tr>
</table>
BY 0124001 陳俊豪
# (三).顧客基本資料作業 #
<table>
<tr>
<td markdown="1">使用案例：顧客基本資料作業</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
主要成功情節：<BR>
1.當顧客要註冊基本資料時，顧客進入會員基本資料作業畫面，並啟動註冊會員鍵。<BR>
<BR>
2.輸入完畢後，選擇儲存鍵，或是取消鍵。<BR>
<BR>
3.如果要針對顧客資訊進行修改，選取修改按鈕，修改完成後，按儲存鍵或取消鍵。<BR>
</td>
<td markdown="1">
<BR>
inputcustomers(); <BR>
checkcoustomers(customersItem) <BR>
savecustomersRec(Customer Rec)<BR>
modifycustomers(cus_id, Name, birth, address,tel,email) <BR>
checkcoustomers(customersItem) <BR>
savecustomersRec(Customer Rec)<BR>
</td>
</table>
</td>
</tr>
</table>
BY 0124091 葉名峻
# (四).查詢作業 #
<table>
<tr>
<td markdown="1">使用案例：查詢作業</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
主要成功情節：<BR>
1	當顧客欲查詢店家時，顧客進入查詢頁面，並啟動查詢鍵。<BR>
2	顧客輸入商品需求條件，可能為店家名稱、店家地址、店家販售項目、店家價格。<BR>
3	輸入完畢後，啟用查詢鍵。<BR>
系統重複1- 3的動作。
4	顧客針對查詢結果，選擇並進 入店家基本資料畫面。<BR>
5	顧客對查詢結果不滿意，啟用重新查詢鍵，返回查詢頁面。<BR>
</td>
<td markdown="1">
inputSearch () <BR>
<BR>
getsearchItem(nName,nAdd,nPrice,nItem)<BR>
checkSearch (getsearchItem) <BR>
printItem(stoName,stoNum) <BR>
</td>
</table>
</td>
</tr>
</table>
BY 0124061 蔡易軒
# (五).顧客針對店家留言 #
<table>
<tr>
<td markdown="1">使用案例：顧客針對店家留言</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
主要成功情節：<BR>
1.當顧客要進行評論時，登錄自己的帳號。<BR>
2.顧客在評價選擇星數，並在留言部分做評論。<BR>
3.系統優先判別是否有庭上星數，若無則跳窗說明”請選擇分數”。<BR>
4.系統在判斷留言部分是否達到30字以上、300字以下，若無則跳窗說明”字數不符”。<BR>
重複3與4。<BR>
5.符合系統規則後，將評價部分寫入評價的數據庫，將評論部分寫入評論的資料庫。<BR>
6.將評價的資料回傳至顯示系統，顯示在各店家的畫面。<BR>
7.將評論的資料回傳至顯示系統，顯示在各店家的畫面。<BR>
</td>
<td markdown="1">
<BR>
<BR>
inputComments()  <BR>
inputEvaluation()  <BR>
checkComments()  <BR>
checkEvaluation()itemMessage <BR>
saveCommentsRec()  <BR>
saveEvaluationRec()  <BR>
<BR>
modifyComments(Comments)  <BR>
modifyEvaluation(Evaluation)<BR>

</td>
</table>
</td>
</tr>
</table>
BY 0124017 郭威誠
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
<table>
<tr>
<td markdown="1">合約1：inputStores()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：inputStores()<BR>
交互參照：商品基本資料作業<BR>
前置條件：存在類別FoodClassification之實例newFoodClassification<BR>
後置條件：-檢查並確認實例newFoodClassification之FoodClassification，屬性隻起始值為空白<BR>
-給定實例 new之屬性FoodClassification最新食物分類<BR>
-回傳productID<BR>
</td>
</table>
</td>
</tr>
</table>

<table>
<tr>
<td markdown="1">合約2：checkFoodClassification()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：checkFoodClassification<BR>
交互參照：商品基本資料作業<BR>
前置條件：已開啟：FoodClassification物件<BR>
後置條件：-檢查FoodClassification之屬性格式是否正確與是否重複<BR>
-回傳itemMessage<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約3：saveFoodClassificationRecFoodClassification Rec)</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：saveFoodClassificationRec(FoodClassification Rec)<BR>
交互參照：商品基本資料作業<BR>
前置條件：存在類別FoodClassification實例FoodClassification<BR>
後置條件：-將FoodClassification存入資料庫中<BR>
-回傳saveSuccess<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約4：modifyFoodClassification</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：modifyFoodClassification<BR>
交互參照：商品基本資料作業<BR>
前置條件：存在類別FoodClassification實例FoodClassification<BR>
後置條件：-根據FoodClassification讀取商品基本資料FoodClassificationRec，並存入至物件FoodClassification之屬性中<BR>
-回傳FoodClassificationRec<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約5：deleteFoodClassification</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：deleteFoodClassification<BR>
交互參照：商品基本資料作業<BR>
前置條件：存在FoodClassification實例FoodClassification<BR>
後置條件：-根據FoodClassification讀取食物分類資料FoodClassificationRec<BR>
-刪除食物分類資料FoodClassificationRec<BR>
- 回傳deleteSuccess<BR>
</td>
</table>
</td>
</tr>
</table>
BY 0124001 陳俊豪
# (三).顧客基本資料作業 #
<table>
<tr>
<td markdown="1">合約1：inputcustomers()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：inputcustomer()<BR>
交互參照：顧客基本資料作業<BR>
前置條件：存在類別customer之實例newcustomer<BR>
後置條件：-檢查並確認實例newcustomer之cus_id、Name、birth, address, tel, email屬性之起始值為空白<BR>
-給定實例 newcustomer之屬性cus_id最新客戶編號<BR>
-回傳cus_id<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約2：checkcoustomers(customersItem) </td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：checkcoustomers(customersItem)<BR>
交互參照：顧客基本資料作業<BR>
前置條件：已開啟：customer物件<BR>
後置條件：-檢查customer之屬性cus_id、Name、birth, address, tel, email之格式是否正確與是否重複<BR>
-回傳customerMessage<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約3：savecustomersRec(Customer Rec)</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：savecustomersRec(Customer Rec)<BR>
交互參照：顧客基本資料作業<BR>
前置條件：存在類別customer實例customer<BR>
後置條件：-將customer存入資料庫中<BR>
-回傳saveSuccess<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約4：modifycustomers(cus_id, Name, birth, address,tel,email)</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：modifycustomers(cus_id, Name, birth, address,tel,email) <BR>
交互參照：顧客基本資料作業<BR>
前置條件：存在類別customer實例customer<BR>
後置條件：-根據cus_id或name讀取商品基本資料customerRec，並存入至物件customer之屬性中<BR>
-回傳customertRec<BR>
</td>
</table>
</td>
</tr>
</table>
BY 0124091 葉名峻
# (四).查詢作業 #
<table>
<tr>
<td markdown="1">合約1：inputSearch()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：inputSearch()<BR>
交互參照：查詢作業<BR>
前置條件：存在類別Search之實例newSearch<BR>
後置條件：-檢查並確認實例newSearch之nName,nAdd,nPrice,nItem屬性之起始值為空白<BR>
-給定實例 newSearch之屬性Search最新查詢編號<BR>
-回傳Search<BR>
</td>
</table>
</td>
</tr>
</table>

<table>
<tr>
<td markdown="1">合約2：getsearchItem(nName,nAdd,nPrice,nItem)</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：getsearchItem(nName、nAdd、nPrice、nItem)<BR>
交互參照：查詢作業<BR>
前置條件：已開啟:Search物件<BR>
後置條件：-建立類別searchItem的實例searchItem<BR>
-實例searchItem與實例newSearch形成關聯<BR>
-實例searchItem根據nName或nAdd或nPrice或nItem讀取資料<BR>
-searchRec存入實例searchItem<BR>
-回傳searchRec記錄
</td>
</table>
</td>
</tr>
</table>

<table>
<tr>
<td markdown="1">合約3：checkSearch (getsearchItem)</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：checkSearch (getsearchItem)<BR>
交互參照：查詢作業<BR>
前置條件：已開啟:Search物件<BR>
後置條件：-檢查Search之屬性nName、nAdd、nPrice、nItem之格式是否正確與是否重複<BR>
-回傳itemMessage<BR>
</td>
</table>
</td>
</tr>
</table>

<table>
<tr>
<td markdown="1">合約4：printItem(stoName,stoNum) </td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：printItem(stoName,stoNum) <BR>
交互參照：查詢作業<BR>
前置條件：存在一個查詢實例newSearch<BR>
後置條件：-建立實例printItem<BR>
-實例searchItem與實例printItem取得關聯<BR>
-實例printItem根據searchItem讀取資料<BR>
-searchRec存入printItem<BR>
-回傳searchRec
</td>
</table>
</td>
</tr>
</table>
BY 0124061 蔡易軒

# (五).顧客針對店家留言 #
<table>
<tr>
<td markdown="1">合約1：inputComments ()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：inputComments ()<BR>
交互參照：顧客針對店家留言<BR>
前置條件：存在類別Comments之實例newCM<BR>
後置條件：-檢查並確認實例newCM之Comments屬性隻起始值為空白<BR>
</td>
</table>
</td>
</tr>
</table>

<table>
<tr>
<td markdown="1">合約2：inputEvaluation()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：inputEvaluation()<BR>
交互參照：顧客針對店家留言<BR>
前置條件：存在類別Evaluation之實例newEL<BR>
後置條件：-檢查並確認實例newEL之Evaluation屬性隻起始值為空白<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約3：checkComments()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：checkComments()<BR>
交互參照：顧客針對店家留言<BR>
前置條件： 已開啟：Comments物件<BR>
後置條件：-檢查並確認實例newCM之Comments屬性隻格式是否正確與是否重複<BR>
-回傳itemMessage<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約4：checkEvaluation()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：checkEvaluation()<BR>
交互參照：顧客針對店家留言<BR>
前置條件：已開啟：Evaluation物件<BR>
後置條件：-檢查並確認實例newEL之Evaluation屬性隻格式是否正確與是否重複<BR>
-回傳itemMessage<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約5：saveCommentsRec()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：saveCommentsRec()<BR>
交互參照：顧客針對店家留言<BR>
前置條件：存在類別Comments實例comments <BR>
後置條件：-將comments存入資料庫中<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約6：saveEvaluationRec()</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：saveEvaluationRec()<BR>
交互參照：顧客針對店家留言<BR>
前置條件：存在類別Evaluation實例evaluation <BR>
後置條件：-將evaluation存入資料庫中<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約7：modifyComments(Comments)</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：modifyComments(Comments)<BR>
交互參照：顧客針對店家留言<BR>
前置條件：存在類別Comments實例comments<BR>
後置條件：-根據storesID讀取留言基本資料CommentsRec，並存入至物件comments之屬性中<BR>
-回傳CommentsRec<BR>
</td>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td markdown="1">合約8：modifyEvaluation(Evaluation)</td>
</tr>
<tr>
<td markdown="1">
<table>
<td markdown="1">
操作：modifyEvaluation(Evaluation)<BR>
交互參照：顧客針對店家留言<BR>
前置條件：存在類別Evaluation實例evaluation<BR>
後置條件：-根據storesID讀取留言基本資料EvaluationRec，並存入至物件evaluation之屬性中<BR>
-回傳EvaluationRec<BR>
</td>
</table>
</td>
</tr>
</table>
BY 0124017 郭威誠
## 11.使用案例之系統循序圖(圖6.13 p170) ##
# (一).店家基本資料作業 #
![](http://i.imgur.com/OYUkVT3.png)
# (二).店家資訊分類 #
![](http://i.imgur.com/NoG0uZC.jpg?1)
# (三).客戶特性分析作業 #
![](http://i.imgur.com/ipZJsE2.jpg)
<BR>BY 0124091 葉名峻<BR>
# (四).查詢作業 #
![Imgur](http://i.imgur.com/xIaGgT0.png)
# (五).顧客針對店家留言 #
![](http://i.imgur.com/J35Rgu7.jpg)

