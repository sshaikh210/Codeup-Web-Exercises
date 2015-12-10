<?php

class Model 
{	
    protected static $table;

    protected static $dbc;

    public $attributes = array();

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        if (!self::$dbc)
        {
        	require_once 'Model_login.php';
            require_once 'dbconnect.php';

            self::$dbc = $dbc;
        }
    }
	/*
     * Get a value from attributes based on name
     */
   public function __set($name, $value)
	{
		$this->attributes[$name] = $value;
	}

    /*
     * Persist the object to the database
     */
   public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
           return $this->attributes[$name];
        }
        return NULL;
    }
    /*
     * Set a new attribute for the object
     */
    public static function getTableName()
    {
        return self::$table;
    } 

    public function save()
    {
        if(!empty($this->attributes)) 
        		{
        		if(isset($attributes['id']))
        		{
        		    $this->update($this->attributes['id']);
        		} else {
        			$this->insert();
        		}
        	}
        }

    protected function insert() {

        $query = "INSERT INTO " . static::$table . " (email, name, phone, address, city, state, zip)
        VALUES (:email, :name, :phone, :address, :city, :state, :zip)";

        $stmt = self::$dbc->prepare($query);

        $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $stmt->bindValue(':address', $this->address, PDO::PARAM_STR);
        $stmt->bindValue(':city', $this->city, PDO::PARAM_STR);
        $stmt->bindValue(':state', $this->state, PDO::PARAM_STR);
        $stmt->bindValue(':zip', $this->zip, PDO::PARAM_STR);
        $stmt->execute();
	}
    protected function update($id) 
    {
        $query = "UPDATE" . static::$table . " SET ";
        $first_value = true;

    	foreach($this->attributes as $key=>$value)
    	{
            if ($key == 'id')
            {
                continue;
            }
            if($first_value)
            {
                $first_value = false;
                $query .= $key . " = :" . $key;
            }
        }
            $query .= 'WHERE id = ' . $id;

            $stmt = self::$dbc->prepare($query);

            foreach ($this->attributes as $key => $value) {
                if($key == 'id')
                {
                    continue;
                }
                $stmt ->bindValue(':' . $key, $value, PDO::PARAM_STR);
            }
    		$stmt->execute();
    }


    public static function find($id)
    {
        self::dbConnect();

        $query = "SELECT * FROM " . static::$table . " WHERE id = :id";

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    public static function all()
    {
        self::dbConnect();

        $query = "SELECT * FROM " . static::$table;
        $stmt = self::$dbc->prepare($query);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $instance = null;
        if($results)
        {
            $instance = new static;
            $instance->attirubtes = $results;
        }
        return $results;
    }

    public static function delete($id)
    {
        self::dbconnect();
        $query = "DELETE FROM " . static::$table . " WHERE id = :id";

            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
    }

}
?>