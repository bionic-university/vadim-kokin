<?php

/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 10:26 AM
 */
class Singer
{
    /**
     * @var String
     */
    private $name;
    /**
     * @var String
     */
    private $FavoriteGenre;

    /**
     * @param String $name
     * @param String $favorite
     */
    public function __construct($name, $favorite)
    {
        $this->name = $name;
        $this->FavoriteGenre = $favorite;
    }

    /**
     * @param String $GroupName
     */
    public function Sing($GroupName)
    {
        $GroupName = str_replace(' ', '', $GroupName);
        if ($this->CheckGroup($GroupName) === false) {
            echo 'There is no such group in ' . $this->getName() . '\'s repertoire' . PHP_EOL;
        } else {

            spl_autoload_register(function ($GroupName) {

                include 'Groups/' . str_replace(' ', '', $GroupName) . '.php';

            });

            $Group = new $GroupName;
            echo $Group->SingASong() . PHP_EOL;

            if ($Group->GetGroupGenre() === $this->getFavoritGenre()) {
                echo 'The performance was great' . PHP_EOL;
            } else {
                echo 'The performance was not so great , it\'s not' . $this->name . '\'s favorite genre' . PHP_EOL;
            }

            echo 'Some info about ' . $Group->GetGroupGenre() . ': ' . PHP_EOL . $Group->getGenreInfo() . PHP_EOL;
        }
    }

    /**
     * @param String $GroupName
     * @return bool
     */
    public function CheckGroup($GroupName)
    {
        $result = false;

        $availebleGruops = [];
        if ($handle = opendir('Groups/')) {

            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {
                    array_push($availebleGruops, str_replace('.php', '', $file));

                }
            }
        }
        $GroupName = str_replace(' ', '', $GroupName);
        $result = in_array($GroupName, $availebleGruops);
        return $result;
    }


    /**
     * @return String
     */
    public function getFavoritGenre()
    {
        return $this->FavoriteGenre;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }


} 