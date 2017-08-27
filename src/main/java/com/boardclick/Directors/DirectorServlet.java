package com.boardclick.Directors;

import com.boardclick.Repository.Repository;
import com.google.gson.Gson;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Created by greg on 05/08/17.
 */

@WebServlet(value="/directors/*")
public class DirectorServlet extends HttpServlet {
    @Override
    protected void doGet(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
        int id = Integer.parseInt(req.getPathInfo().split("/")[1]);
        Repository repository = new Repository();
        Director director = repository.getSingle(id, Director.class);
        resp.getWriter().print(new Gson().toJson(director));
    }
//Annotation for override
    @Override
    protected void doPut(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
        Repository repository = new Repository();
        Director director = new Gson().fromJson(req.getReader(), Director.class);
        int id = repository.addSingle(director, Director.class);
        resp.getWriter().print(id);
    }
}
