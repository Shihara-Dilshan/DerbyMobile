import React, {useContext} from "react";
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import HomeScreen from "../HomeScreens/HomeScreen";
import NotificationScreen from "../HomeScreens/NotificationScreen";
import AccountScreen from "../HomeScreens/AccountScreen";
import CartScreen from "../HomeScreens/CartScreen";
import Icon from "react-native-vector-icons/Ionicons";

import { BottomTabSelectedContext } from "../../context/BottomTabSelectedContext";

const Tab = createBottomTabNavigator();

function BottonTabScreen() {
  const [selectedIndex, setSelectedIndex] = useContext(BottomTabSelectedContext);
  return (
    <Tab.Navigator >
      <Tab.Screen options={{
            headerShown: false,
            tabBarShowLabel: false,
            tabBarIcon: ({ color, size }) => (
              <Icon
              style={{ padding: 0 }}
              name="home"
              size={25}
              color={selectedIndex === 1 ? "#00a538" : "grey"} 
            />
            ),
          }} name="home" component={HomeScreen}  />
      <Tab.Screen options={{
            headerShown: false,
            tabBarShowLabel: false,
            tabBarIcon: ({ color, size }) => (
              <Icon
              style={{ padding: 0 }}
              name="notifications"
              size={25}
              color={selectedIndex === 2 ? "#00a538" : "grey"} 
            />
            ),
          }} name="notifications" component={NotificationScreen}  />
      <Tab.Screen options={{
            headerShown: false,
            tabBarShowLabel: false,
            tabBarIcon: ({ color, size }) => (
              <Icon
              style={{ padding: 0 }}
              name="person"
              size={25}
              color={selectedIndex === 3 ? "#00a538" : "grey"} 
            />
            ),
          }} name="account" component={AccountScreen}  />
      <Tab.Screen options={{
            headerShown: false,
            tabBarShowLabel: false,
            tabBarIcon: ({ color, size }) => (
              <Icon
              style={{ padding: 0 }}
              name="cart"
              size={25}
              color={selectedIndex === 4 ? "#00a538" : "grey"} 
            />
            ),
          }} name="cart" component={CartScreen}  />
    </Tab.Navigator>
  );
}

export default BottonTabScreen;