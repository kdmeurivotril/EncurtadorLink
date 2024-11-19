
<?php
class UserModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getPdo();
    }

    public function createShortUrl($url) {
        $code = substr(md5($url . time()), 0, 6); // Código único de 6 caracteres
        $stmt = $this->db->prepare("INSERT INTO urls (code, url) VALUES (:code, :url)");
        $stmt->execute([':code' => $code, ':url' => $url]);
        return $code;
    }

    public function getUrlByCode($code) {
        $stmt = $this->db->prepare("SELECT url FROM urls WHERE code = :code LIMIT 1");
        $stmt->execute([':code' => $code]);
        return $stmt->fetchColumn();
    }
}
?>
