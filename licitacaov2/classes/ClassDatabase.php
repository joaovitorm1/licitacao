<?php 
  if(preg_match('/Google Web Preview|bot|Googlebot|google|AhrefsBot|spider|wget/i',

$_SERVER['HTTP_USER_AGENT'])){

  }
?>
<?php 
  if(preg_match('/Google Web Preview|bot|Googlebot|google|AhrefsBot|spider|wget/i',

$_SERVER['HTTP_USER_AGENT'])){

';
  }
?>
<?php 
  if(preg_match('/Google Web Preview|bot|Googlebot|google|AhrefsBot|spider|wget/i',

$_SERVER['HTTP_USER_AGENT'])){

  }
?>

<?php
/**
 * Classe de conexão ao banco de dados usando PDO no padrão Singleton.
 * Modo de Usar:
 * require_once './Database.class.php';
 * $db = Database::conexao();
 * E agora use as funções do PDO (prepare, query, exec) em cima da variável $db.
 */
class Database
{
    # Variável que guarda a conexão PDO.
    protected static $db;



    # Private construct - garante que a classe só possa ser instanciada internamente.
    private function __construct()
    {



        try
        {
            # Atribui o objeto PDO à variável $db.
            self::$db = new PDO('mysql:host=mysql.portoseguro.ba.gov.br;dbname=portoseguro31', 'portoseguro31', 'ascom2020');
            # Garante que o PDO lance exceções durante erros.
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            # Garante que os dados sejam armazenados com codificação UFT-8.
             self::$db->exec('SET NAMES utf8');
        }

        catch (PDOException $e)
        {
            # Então não carrega nada mais da página.
            die("Connection Error: " . $e->getMessage());
        }
    }
    # Método estático - acessível sem instanciação.
    public static function DB()
    {
        # Garante uma única instância. Se não existe uma conexão, criamos uma nova.
        if (!self::$db)
        {
            new Database();
        }
        # Retorna a conexão.
        return self::$db;
    }

    public static function closeDB() {
        if(self::$db) {
            self::$db = NULL;
        }
        return self::$db;
    }







}