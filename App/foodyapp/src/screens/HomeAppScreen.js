import * as React from "react";
import {
  Button,
  View,
  Image,
  ScrollView,
  Text,
  TextInput,
  Dimensions,
} from "react-native";
import { createDrawerNavigator } from "@react-navigation/drawer";
import { NavigationContainer } from "@react-navigation/native";
import Icon from "react-native-vector-icons/Ionicons";
import HomeScreen from "./HomeScreens/HomeScreen";
import BottonTabScreen from "./ButtonTabScreen/BottonTabScreen";

function NotificationsScreen({ navigation }) {
  return (
    <View
      style={{
        flex: 1,
        alignItems: "center",
        justifyContent: "center",
        backgroundColor: "white",
      }}
    >
      <Button onPress={() => navigation.goBack()} title="Go back home" />
    </View>
  );
}

const Drawer = createDrawerNavigator();

export default function HomeAppScreen() {
  return (
    <NavigationContainer>
      <Drawer.Navigator
        initialRouteName="Home"
        screenOptions={{
          headerStyle: {
            elevation: 0,
            shadowOpacity: 0,
            backgroundColor: "white",
          },
        }}
      >
        <Drawer.Screen
          options={{
            title: "Home",
            headerTitle: "",
            headerTitleAlign: "center",
            headerRight: () => (
              // <Icon.Button
              //   name="ios-cart"
              //   size={25}
              //   backgroundColor="#ffffff"
              //   color="#000000"
              //   onPress={() => {}}
              // />
              <Image
                source={require("./../assets/images/avatar.jpeg")}
                style={{
                  width: 45,
                  height: 45,
                  borderRadius: 150 / 2,
                  overflow: "hidden",
                  borderWidth: 3,
                  margin: 5,
                  borderColor: "grey",
                }}
              />
            ),
          }}
          name="Home"
          component={BottonTabScreen}
        />
        <Drawer.Screen name="Notifications" component={NotificationsScreen} />
      </Drawer.Navigator>
    </NavigationContainer>
  );
}
