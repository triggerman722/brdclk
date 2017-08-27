package com.boardclick.Events;

import com.boardclick.Repository.Repository;
import com.google.gson.Gson;

import java.io.IOException;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Created by greg on 05/08/17.
 */

@WebServlet(value="/events/*")
public class EventServlet extends HttpServlet {
    @Override
    protected void doGet(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {

        Repository repository = new Repository();
        if (req.getPathInfo() == null) {
            List<Event> allEvents = repository.getAll(Event.class, 0, 10);
            resp.getWriter().print(new Gson().toJson(allEvents));
        } else {
            int id = Integer.parseInt(req.getPathInfo().split("/")[1]);
            Event event = repository.getSingle(id, Event.class);
            resp.getWriter().print(new Gson().toJson(event));
        }
    }

    @Override
    protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
        Repository repository = new Repository();
        Event event = new Gson().fromJson(req.getReader(), Event.class);
        int id = repository.addSingle(event, Event.class);
        resp.getWriter().print(id);
    }
}
