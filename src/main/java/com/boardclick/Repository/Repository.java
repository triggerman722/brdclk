package com.boardclick.Repository;

import com.boardclick.Configuration.DatabaseConnection;
import com.boardclick.Events.Event;
import com.google.gson.Gson;

import java.sql.Connection;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by greg on 05/08/17.
 */
public class Repository {
    public <T> T getSingle(int id, Class<T> className){
        String query = "SELECT classdata FROM bigtable where id = " + id + " AND classname='"+className.getName()+"'";
        return getSingleByQuery(className, query);
    }
    public <T> T  getSingleByQuery(Class<T> className, String query){
        T result = null;
        Connection connection = DatabaseConnection.getConnection();
        try {
            ResultSet resultSet = connection.createStatement().executeQuery(query);
            if (resultSet.next()) {
                result = new Gson().fromJson(resultSet.getString("classdata"), className);
            }
            connection.close();
        } catch (Exception e) {
            System.out.println(e.getMessage());
        } finally {
            try {connection.close();} catch (Exception e){}
        }
        return result;
    }
    public int addSingle(Object objectToAdd, Class className) {
        String query = "INSERT INTO bigtable (classname, classdata) VALUES ('"+className.getName()+"', '"+new Gson().toJson(objectToAdd)+"') RETURNING ID";
        return addSingleByQuery(query);
    }
    public int addSingleByQuery(String query) {
        int id=0;
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

    public <T> List<T> getAll(Class<T> returnClass, int offset, int limit) {
        List<T> returnList = new ArrayList<T>();
        String query = "SELECT classdata FROM bigtable where classname='"+returnClass.getName()+"' OFFSET "+offset+" LIMIT "+limit+"";
        Connection connection = DatabaseConnection.getConnection();
        try {
            ResultSet resultSet = connection.createStatement().executeQuery(query);
            if (resultSet.next()) {
                T result = new Gson().fromJson(resultSet.getString("classdata"), returnClass);
                returnList.add(result);
            }
            connection.close();
        } catch (Exception e) {
            System.out.println(e.getMessage());
        } finally {
            try {connection.close();} catch (Exception e){}
        }
        return returnList;
    }
}
