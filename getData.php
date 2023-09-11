<?php
require_once("pdo.php");

class getData{

    public $pdo;
    public $data;

    //コンストラクタ
    function __construct()  {
        $this->pdo = connect();
    }

    /**
     * ユーザ情報の取得
     *
     * @param 
     * @return array $users_data ユーザ情報
     */
    public function getUserData(){
        $getusers_sql = "SELECT * FROM users limit 1";
        $users_data = $this->pdo->query($getusers_sql)->fetch(PDO::FETCH_ASSOC);
        return $users_data;
    }
    
    /**
     * 記事情報の取得
     *
     * @param 
     * @return array $post_data 記事情報
     */
    public function getPostData(){


    
        $getposts_sql = "SELECT * FROM posts ORDER BY id DESC";
    
        // 投稿データを取得
        $post_data = $this->pdo->query($getposts_sql);
    
        echo "<table>";
        echo "<tr>";
        echo "<th>記事id</th>";
        echo "<th>タイトル</th>";
        echo "<th>カテゴリ</th>";
        echo "<th>本文</th>";
        echo "<th>投稿日</th>";
        echo "</tr>";
    
        while ($row = $post_data->fetch(PDO::FETCH_ASSOC)) {  
                
            
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['title']} </td>"."<td>";
            if ($row['category_no']==1){
                echo "食事";
            }elseif ($row['category_no']==2){
                echo "旅行";
            }elseif ($row['category_no']==3){
                echo "その他";
            }
            echo "</td>"."<td>{$row['comment']}</td>";
            echo "<td>{$row['created']}</td>";
            echo "</tr>";
            
        }
        echo "</table>";

        }
    }










