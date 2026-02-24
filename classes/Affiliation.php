<?php
// /classes/Affiliation.php
// -------------------------------------
// Affiliation class for CRUD operations
// Admin can add from CSV or manually using this class

class Affiliation {

    /**
     * CREATE Affiliation
     */
    public static function create($pdo, $data) {
        try {

            $stmt = $pdo->prepare("
                INSERT INTO affiliations 
                (club_name, address, phone, email, website, logo, state, country, type, status)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");

            $stmt->execute([
                $data['club_name'] ?? '',
                $data['address'] ?? '',
                $data['phone'] ?? '',
                $data['email'] ?? '',
                $data['website'] ?? '',
                $data['logo'] ?? '',
                $data['state'] ?? '',
                $data['country'] ?? '',
                $data['type'] ?? 'national',
                $data['status'] ?? 'active'
            ]);

            return $pdo->lastInsertId(); // return new ID

        } catch (PDOException $e) {
            error_log("Create affiliation failed: " . $e->getMessage());
            return false;
        }
    }


    /**
     * READ ALL Affiliations
     */
    public static function getAll($pdo) {
        $stmt = $pdo->query("
            SELECT * FROM affiliations 
            ORDER BY id DESC
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * READ Affiliation BY ID
     */
    public static function getById($pdo, $id) {
        $stmt = $pdo->prepare("
            SELECT * FROM affiliations 
            WHERE id = ?
        ");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    /**
     * UPDATE Affiliation
     */
    public static function update($pdo, $id, $data) {
        try {

            $stmt = $pdo->prepare("
                UPDATE affiliations SET
                    club_name = ?,
                    address   = ?,
                    phone     = ?,
                    email     = ?,
                    website   = ?,
                    logo      = ?,
                    state     = ?,
                    country   = ?,
                    type      = ?,
                    status    = ?
                WHERE id = ?
            ");

            return $stmt->execute([
                $data['club_name'] ?? '',
                $data['address'] ?? '',
                $data['phone'] ?? '',
                $data['email'] ?? '',
                $data['website'] ?? '',
                $data['logo'] ?? '',
                $data['state'] ?? '',
                $data['country'] ?? '',
                $data['type'] ?? 'national',
                $data['status'] ?? 'active',
                $id
            ]);

        } catch (PDOException $e) {
            error_log("Update affiliation failed: " . $e->getMessage());
            return false;
        }
    }


    /**
     * DELETE Affiliation
     */
    public static function delete($pdo, $id) {
        try {
            $stmt = $pdo->prepare("
                DELETE FROM affiliations 
                WHERE id = ?
            ");
            return $stmt->execute([$id]);

        } catch (PDOException $e) {
            error_log("Delete affiliation failed: " . $e->getMessage());
            return false;
        }
    }

}
?>
