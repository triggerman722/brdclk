package com.boardclick.Directors;

import com.boardclick.Configuration.DatabaseConnection;
import com.google.gson.Gson;

import java.sql.Connection;
import java.sql.ResultSet;

/**
 * Created by greg on 05/08/17.
 */
public class DirectorRepository {
    public Director getSingle(int id){
        Director director = new Director();
        String query = "SELECT classdata FROM bigtable where id = " + id + " AND classname='"+Director.class.getTypeName()+"'";
        Connection connection = DatabaseConnection.getConnection();
        try {
            ResultSet resultSet = connection.createStatement().executeQuery(query);
            if (resultSet.next()) {
                director = new Gson().fromJson(resultSet.getString("classdata"), Director.class);
            }
            connection.close();
        } catch (Exception e) {
            System.out.println(e.getMessage());
        } finally {
            try {connection.close();} catch (Exception e){}
        }
        return director;
    }
    public int addSingle(Director director) {
        int id=0;
        String query = "INSERT INTO bigtable (classname, classdata) VALUES ('"+Director.class.getTypeName()+"', '"+new Gson().toJson(director)+"') RETURNING ID";
        Connection connection = DatabaseConnection.getConnection();
        try {
            ResultSet resultSet = connection.createStatement().executeQuery(query);
            if (resultSet.next()) {
                id=resultSet.getInt(1);
            }
            connection.close();
        } catch (Exception e) {
            System.out.println(e.getMessage());
        } finally {
            try {connection.close();} catch (Exception e){}
        }
        return id;
    }
}
